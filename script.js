document.addEventListener('DOMContentLoaded', () => {
    const graduateLevel = document.getElementById('graduate-level');
    const radioGroup = document.getElementById('radio-group');
    const dynamicFields = document.getElementById('dynamic-fields');

    graduateLevel.addEventListener('change', () => {
        if(graduateLevel.value === 'yes'){
            dynamicFields.style.display = 'flex';
            dynamicFields.style.flexDirection = 'column';
            radioGroup.style.display = 'flex';
        } else if(graduateLevel.value === 'no'){
            dynamicFields.style.display = 'none';
            radioGroup.style.display = 'none';
        }
    })
});

/*
function validateForm(event){
    event.preventDefault();

    const name = document.getElementById('name').value.trim();
    const lastname = document.getElementById('lastname').value.trim();
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const passwordAgn = document.getElementById('password-agn').value.trim();
    const graduateLevel = document.getElementById('graduate-level').value.trim();

    if(!name || !lastname || !username || !password || !passwordAgn || !graduateLevel){
        alert("Tüm alanları doldurmalısınız!");
        return false;
    }

    if(password !== passwordAgn){
        alert("Girdiğiniz parolalar eşleşmiyor.");
        return false;
    }

    document.getElementById("register-form").submit();
}
*/