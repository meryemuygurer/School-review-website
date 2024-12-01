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