async function hashPassword(password)
{
    const encoder = new TextEncoder();
    const data = encoder.encode(password);

    const hashBuffer = await crypto.subtle.digest("SHA-256", data);
    const hashBase64 = new Uint8Array(hashBuffer).toBase64();

    return hashBase64;
}

async function login() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const hashedpass = await hashPassword(password);

    fetch('login-back.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ username, hashedpass })
})
.then(response => response.text())
.then(data => {
    document.querySelector('.login-results').innerText = (data);
});

}
