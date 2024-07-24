// validation using Regular expression for registration
function FormValidation(){
    const Aname = document.getElementById('fname');
    const Bname = document.getElementById('lname');
    const mails = document.getElementById('email')
    const pswrd = document.getElementById('password');
    const address = document.getElementById('address');
    const Num = document.getElementById('mobileno');
    const state = document.getElementById('state');
    const city = document.getElementById('city');
    const pincode = document.getElementById('pincode');

    const FnameValid = document.getElementById('FnameValid');
    const LnameValid = document.getElementById('LnameValid');
    const Mailvalid = document.getElementById('MailValid');
    const passvalid = document.getElementById('passValid');
    const addressValid = document.getElementById('addressValid');
    const mobilenoValid = document.getElementById('mobilenoValid');
    const stateValid = document.getElementById('stateValid');
    const cityValid = document.getElementById('cityValid');
    const pincodeValid = document.getElementById('pincodeValid');

    // first name
    Aname.addEventListener('blur',()=>{
        let regx = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
        let str = Aname.value;

        if(regx.test(str)){
            console.log('it match');
            FnameValid.classList.add('hidden');
        }else{
            FnameValid.classList.remove('hidden');;
        }
    })

    // last name
    Bname.addEventListener('blur',()=>{
        let regx = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
        let str = Bname.value;

        if(regx.test(str)){
            console.log('it match');
            LnameValid.classList.add('hidden');
        }else{
            LnameValid.classList.remove('hidden');;
        }
    })

    // E-mail
    mails.addEventListener('blur',()=>{
        console.log('mail blur')
        let regx = /^[a-zA-Z][a-zA-Z0-9._-]*@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let str = mails.value;

        if(regx.test(str)){
            console.log('it match');
            Mailvalid.classList.add('hidden');
        }else{
            Mailvalid.classList.remove('hidden');;
        }
    })

    // password
    pswrd.addEventListener('blur',()=>{
        console.log('pass blur')
        let lengthRegex = /^.{8,}$/;
        let str = pswrd.value.trim();

        if(lengthRegex.test(str)){
            console.log('it match');
            passvalid.classList.add('hidden');
        }else{
            passvalid.classList.remove('hidden');;
        }
    })

    // Address
    address.addEventListener('blur',()=>{
        let regx = /^[\w\d\s#.,'-]{5,}$/i;
        let str = address.value;

        if(regx.test(str)){
            console.log('it match');
            addressValid.classList.add('hidden');
        }else{
            addressValid.classList.remove('hidden');;
        }
    })

    // phone number
    Num.addEventListener('blur',()=>{
        let regx = /^[6-9]\d{9}$/;
        let str = Num.value;

        if(regx.test(str)){
            console.log('it match');
            mobilenoValid.classList.add('hidden');
        }else{
            mobilenoValid.classList.remove('hidden');
        }
    })

    // state
    state.addEventListener('blur',()=>{
        let regx = /^[a-zA-Z\s'-]+$/;
        let str = state.value;

        if(regx.test(str)){
            console.log('it match');
            stateValid.classList.add('hidden');
        }else{
            stateValid.classList.remove('hidden');
        }
    })

    // city
    city.addEventListener("blur",()=>{
        let regx = /^[a-zA-Z\s'-]+$/;
        let str = city.value;

        if(regx.test(str)){
            console.log('it match');
            cityValid.classList.add('hidden');
        }else{
            cityValid.classList.remove('hidden');
        }
    });

    // pincode
    pincode.addEventListener("blur",()=>{
        let regx = /^[1-9][0-9]{5}$/;
        let str = pincode.value;

        if(regx.test(str)){
            console.log('it match');
            pincodeValid.classList.add('hidden');
        }else{
            pincodeValid.classList.remove('hidden');
        }
    });
}

FormValidation();