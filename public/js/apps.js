 $(document).ready(function () { 
        new Validation('#form-login', {
            fields: [
                {
                    name: 'email',
                    rule: {
                        type: 'required',
                        prompt: 'Email address or phone number is invalid'
                    }
                }, {
                    name: 'password',
                    rule: {
                        type: 'minLength:6',
                        prompt: 'Please enter a password'
                    }
                }
            ],
            submitOnValid: true,
            showErrorMessage: false
        }); 

    });