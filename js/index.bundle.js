document.addEventListener("DOMContentLoaded",(()=>{const e=document.querySelectorAll(".categries-item"),t=document.querySelectorAll(".textblock");e.forEach((a=>{a.addEventListener("click",(()=>{e.forEach((e=>e.classList.remove("active"))),a.classList.add("active");const c=a.getAttribute("data-category");t.forEach((e=>{e.classList.remove("active")}));const l=document.querySelector(`.textblock[data-category="${c}"]`);l&&l.classList.add("active")}))}))})),$(document).ready((function(){$btn=$("#"),$($btn).click((function(e){var t;e.preventDefault(),$email=$("#email"),console.log($email.val()),$name.val(),t=$email.val(),$tel.val(),$description.val(),$.post("./classes/mailTovar.php",{email:t}).done((function(e){})),$btn.text("Отправлено")}))}));
$(document).ready(function(){
    $btn = $("#mailbtn");

    $($btn).click(function(e){
        e.preventDefault();
        $email = $("#email");
        sendAjaxForm("./classes/mailTovar.php",$email.val());
        $btn.text("Отправлено");
    })
})
function sendAjaxForm(url,email){
    $.post(url, {"email": email}).done(
        function(data){
            // alert(data);
        }
    );
}