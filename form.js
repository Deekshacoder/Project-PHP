const name=document.getElementById('name')
const email=document.getElementById('email')
const mobile=document.getElementById('mobile')
const Doctors=document.getElementById('Doctors')
const Date=document.getElementById('Date')
const form=document.getElementById('form')
const errorElement=document.getElementById('error');

form.addEventListener('submit',(e)=>{
    let message=[]
    if(name.value==''|| name.value==null){
        message.push('Name is required')
    }

    if(message.length>0){
        e.preventDefault()
        errorElement.innerText=message.join(',')
    }
})
<script defer src="form.js"></script>