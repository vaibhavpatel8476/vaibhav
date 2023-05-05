    function matchpass() {
        let pass1 = $('#pass').val();
        let pass2 = $('#cpass').val();
        if (pass1 != pass2) {
            $('#passerror').text('not match');
        } else {
            $('#passerror').text('');
        }
    }

    function namecheck(id) {
        let name = document.getElementById(id).value;
        let regexp = /[0-9]/;
        if (name.match(/[0-9]/)) {
            $('#fnameerror').text('numbers are not allow');
             var err=true;
             return err;
            name = '';
        } else if (name.match(/^[a-z]/)){
            $('#fnameerror').text('');
            
            
        } else {
            $('#fnameerror').text('Blank spaces not allowed');
            
        }
    }

    function phonecheck() {
        let num = $('#phone_number').val();
        
        if (num.match(/\./)) {
            
            $('#numerr').text('dot not allowed');


        } else if (num.length < 10 || num.length > 10) {
            document.getElementById('numerr').innerText = 'invalid number';
        } else {
            document.getElementById('numerr').innerText = '';

        }
    }

    function checkdate() {
        let date = new Date();

        let userdate = document.getElementById('dob').value;
        let todaydate = date.getFullYear() + '-' + "0" + (date.getMonth() + 1) + '-' + date.getDate();

        if (userdate < todaydate) {
            document.getElementById('doberr').innerText = '';
        } else if (userdate > todaydate) {
            document.getElementById('doberr').innerText = 'invalid date';

        } else {
            document.getElementById('doberr').innerText = "today's date is not allowed"
        }
    }
    function namecheck(id) {
        let name = document.getElementById(id).value;

        if (name.match(/[0-9]/)) {
            $('#fnameerror').text('numbers are not allow');
            name = '';
        } else if (name.match(/^[a-z]/)) {
            $('#fnameerror').text('');
        } else {
            $('#fnameerror').text('Blank spaces not allowed');
           
        }

    }

function validate(){
    const size= $('#formfile')[0].files[0].size;
    if(size>=204800 && size<=512000){
        $('#fileerr').text("");
    }else{
        $('#fileerr').text("file size incorrect");
    }
}