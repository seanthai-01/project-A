const password = document.getElementById('txtPass');
const confirmPassword = document.getElementById('txtPassword');
const message = document.getElementById('checkMatch');
const btnRegister = document.getElementById('btnRegister');

function checkPasswordMatch() {
    // 1. ถ้ายังไม่ได้พิมพ์อะไรในช่องยืนยันรหัสผ่าน ให้เคลียร์ข้อความเตือน
    if (confirmPassword.value.length === 0) {
        message.textContent = '';
        submitBtn.disabled = false;
        return;
    }

    // 2. เปรียบเทียบค่าของทั้งสองช่อง
    if (password.value === confirmPassword.value) {
        message.textContent = '✓ รหัสผ่านตรงกัน';
        message.style.color = 'green';
        submitBtn.disabled = false; // เปิดให้กดปุ่มส่งข้อมูลได้
    } else {
        message.textContent = '✗ รหัสผ่านไม่ตรงกัน';
        message.style.color = 'red';
        submitBtn.disabled = true;  // บล็อกปุ่มไม่ให้กดส่งข้อมูล
    }
}

// ผูก Event ให้ทำงานทุกครั้งที่มีการพิมพ์ในทั้งสองช่อง
password.addEventListener('input', checkPasswordMatch);
confirmPassword.addEventListener('input', checkPasswordMatch);

function funRegister(){
    let txtCompanyName = document.getElementById("txtCompanyName").value;
    let txtFirstname = document.getElementById("txtFirstname").value;
    let txtSurname = document.getElementById("txtSurname").value;
    let txtUsername = document.getElementById("txtUsername").value;
    let txtPassword = document.getElementById("txtPassword").value;
    let txtEmail = document.getElementById("txtEmail").value;

    const data = {
        companyname : txtCompanyName,
        firstname : txtFirstname,
        surname :txtSurname,
        username :txtUsername,
        password : txtPassword,
        email : txtEmail
    };

    fetch("insRegister.php",{
        method:"post",
        headers:{
            'Content-Type':'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(result => {
        console.log('Success:', result);
        alert('บันทึกข้อมูลสำเร็จ!');
    })
    .catch(error => {
        console.error('Error:', error);
    });

    console.log(data);
}