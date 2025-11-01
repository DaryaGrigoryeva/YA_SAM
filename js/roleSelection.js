document.addEventListener('DOMContentLoaded', function() {
    // Здесь ваш JavaScript-код
    document.getElementById('role').addEventListener('change', function() {
        var selectedRole = this.value;
        
        if (selectedRole === 'Самозанятый') {
            document.getElementById('signup__inn-field').style.display = 'block';
            document.getElementById('edu').style.display = 'block';
            document.getElementById('sfera').style.display = 'block';
        } else {
            document.getElementById('signup__inn-field').style.display = 'none';
            document.getElementById('edu').style.display = 'none';
            document.getElementById('sfera').style.display = 'none';
        }
    });
});
