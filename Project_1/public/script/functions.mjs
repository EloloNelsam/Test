export function validateForm(form) {
    let isValid = true;
    for (let i = 0; i < form.length; i++) {
        const field = form[i];
        let fieldValid = true;
        switch (field.type) {
            case "text":
                fieldValid = validateStringFields(field) ? true : false;
                break;
            case "number":
                fieldValid = validateNumberFields(field) ? true : false;
                break;
            case "select-one":
                fieldValid = validateSelectFields(field) ? true : false;
                break;
            default:
                continue;


        }
        isValid = isValid && fieldValid;
        addSuccessOrError(field, fieldValid);

    }


    function clearValidationMessage(parent) {
        const existingMsg = parent.querySelector('p');
        if (existingMsg) {
            parent.removeChild(existingMsg);
        }
    }

    function addSuccessOrError(field, bool) {
        if (!bool) {
            field.classList.remove('border-green-500');
            field.classList.add('border-red-500', "border", "border-2");
        } else {
            field.classList.remove('border-red-500');
            field.classList.add('border-green-500', "border", "border-2");
        }
    }

    function validateStringFields(field) {
        const parent = field.parentNode;
        // parent.classList.add("border", "border-2", "border-red-400");
        let msg = parent.querySelector('p');
        if (msg !== null) {
            parent.removeChild(msg);
        }
        msg = document.createElement('p');
        if (field.value.trim() === "") {
            msg.classList.add('text-red-500', 'text-sm');
            msg.innerText = `Le champ ${field.name.split('-')[0]} ne peut pas être vide`;
            if (!parent.contains(msg)) {
                parent.appendChild(msg);
            }
            return false
        }
        msg.classList.add('text-green-500', 'text-sm');
        msg.innerText = `Le champ ${field.name} est correct`;

        if (!parent.contains(msg)) {
            parent.appendChild(msg);
        }
        return true;
    }

    function validateNumberFields(field) {
        const parent = field.parentNode;
        let msg = parent.querySelector('p');
        if (msg !== null) {
            parent.removeChild(msg);
        }
        msg = document.createElement('p');
        if (isNaN(field.value) || field.value === "") {
            msg.classList.add('text-red-500', 'text-sm');
            msg.innerText = `Le champ ${field.name.split('-')[0]} doit être un nombre.`;
            if (!parent.contains(msg)) {
                parent.appendChild(msg);
            }
            return false
        }
        if (field.value < 0) {
            msg.classList.add('text-red-500', 'text-sm');
            msg.innerText = `Le champ ${field.name.split('-')[0]}  ne peut pas être négatif.`;
            if (!parent.contains(msg)) {
                parent.appendChild(msg);
            }
            return false
        }
        msg.classList.add('text-green-500', 'text-sm');
        msg.innerText = `Le champ ${field.name} est correct`;

        if (!parent.contains(msg)) {
            parent.appendChild(msg);
        }
        return true;

    }

    function validateSelectFields(select) {
        const parent = select.parentNode;
        let msg = parent.querySelector('p');
        if (msg !== null) {
            parent.removeChild(msg);
        }
        msg = document.createElement('p');
        if (select.selectedIndex === 0) {

            msg.classList.add('text-red-500', 'text-sm');
            msg.innerText = ` Veuillez sélectionner un ${select.name.split('_')[0].toUpperCase()}`;
            if (!parent.contains(msg)) {
                parent.appendChild(msg);
            }
            return false;
        }

        msg.classList.add('text-green-500', 'text-sm');
        msg.innerText = `Le champ ${select.name} est correct`;
        if (!parent.contains(msg)) {
            parent.appendChild(msg);
        }
        return true;
    }


    if (isValid) {
       sendToServer(form);
    }
}

function sendToServer(form) {
    const formData = new FormData(form);
    const controller = formData.get('controller');
    fetch("http://localhost:8000/?action=create", {
        method: 'POST',
        body: formData
    })
        .then(res => {
            console.log(res)
            window.location.href = `http://localhost:8000/?${controller}=article&action=read`
        })
        .catch(err => {
            console.log(err);
        })
}

