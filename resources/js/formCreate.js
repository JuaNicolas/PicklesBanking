const name = $('#name')
const serviceReference = $('#numRef')


verifyName = () => {
    const serviceName = name.val()
    const validation = onlyLetter(serviceName)

    if (validation) {
        name.addClass('is-valid')
        name.removeClass('is-invalid')
    } else {
        name.addClass('is-invalid')
        name.removeClass('is-valid')
    }
    validateButton()
}

verifyReference = () => {
    const serviceReferenceNumber = serviceReference.val()

    if (serviceReferenceNumber) {
        serviceReference.addClass('is-valid')
        serviceReference.removeClass('is-invalid')
    } else {
        serviceReference.addClass('is-invalid')
        serviceReference.removeClass('is-valid')
    }
    validateButton()
}

onlyLetter = (value) => {
    const letters = /([a-zA-Z])\w+/;
    if (value.match(letters)) {
        return true;
    }
    else {
        return false;
    }
}

validateButton = () => {
    const button = $('#create')
    const condition = name.hasClass('is-valid') && serviceReference.hasClass('is-valid')

    if (condition) {
        button.prop('disabled', false);
    } else {
        button.prop('disabled', true);
    }
}