function logout() {
    // Clear the session on the server side
    fetch('php_logout.php', { method: 'GET' })
        .then(response => {
            // Redirect to index.php after successful logout
            alert("Thank You! Come Again!"),window.location.href = 'Index.php';
        })
        .catch(error => console.error('Error:', error));
}