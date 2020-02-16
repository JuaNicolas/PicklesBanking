const service = $('#options')
const amount = $('#amount')


verifySelect = () => {
    const serviceName = service.val()
    if (serviceName) {  
        service.addClass('is-valid')
        service.removeClass('is-invalid')
    } else {
        service.addClass('is-invalid')
        service.removeClass('is-valid')
    }
    validateButtonPay()
}


verifyInput = () => {
    const serviceAmount = amount.val()

    if (serviceAmount) {
        amount.addClass('is-valid')
        amount.removeClass('is-invalid')
    } else {
        amount.addClass('is-invalid')
        amount.removeClass('is-valid')
    }
    validateButtonPay()
}

validateButtonPay = () => {
    const button = $('#pay')
    const condition = service.hasClass('is-valid') && amount.hasClass('is-valid')

    if (condition) {
        button.prop('disabled', false);
    } else {
        button.prop('disabled', true);
    }
}