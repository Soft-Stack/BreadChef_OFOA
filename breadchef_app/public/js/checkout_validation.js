



function phone_number_validation(){ //console.log("Hello World"); }
    //phone_number
    var mobile_number = document.getElementById('phone_number').value;
    var button = document.getElementById('order-btn');
    var mobile_pattern = /^[0][0-9]{10}$/; 
    
    //console.log(mobile_number);
    
    if( mobile_pattern.test(mobile_number) ){
        console.log("True");
        document.getElementById('phone_number').style.border = '3px solid green';
        document.getElementById('order-btn').disabled = false;

    }
    else{
        document.getElementById('phone_number').style.border = '3px solid red';
        document.getElementById('order-btn').disabled = true;
    }
}

function name_validation(){
    var fullname = document.getElementById('fullname').value;
    var name_pattern = /^[A-Za-z .]{3,20}$/;

    if( name_pattern.test(fullname)){
        document.getElementById('fullname').style.border = '3px solid green';
    }
    else{
        document.getElementById('fullname').style.border = '3px solid red';
    }

}
