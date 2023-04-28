function checkname() {
    let element=document.getElementById('sub_title').value;

    let regexp=/[0-9]/;
if(element.match(regexp)){
    
    document.getElementById('sub_title').value='';
}    
}

function display() {
    if(document.getElementById('freecourse').checked==true){
        document.getElementById('priceing').style.display='none';
        
    }else
    {
        document.getElementById('priceing').style.display='';

    }
    
}
function displaydiscount() {
    if(document.getElementById('Discount_s').checked==true){
        document.getElementById('discounting').classList.remove('discount');
        
    }else
    {
        document.getElementById('discounting').classList.add('discount');

    }
    
}

function filesize() {
    
    if(  document.getElementById('image').files[0].size >= 5000){
        document.getElementById('file_err').innerText='file size is big';
        document.getElementById('image').value='';
    }else{
        document.getElementById('file_err').innerText='';

    }
    
}