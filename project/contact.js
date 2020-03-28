var field = {};

document.addEventListener("DOMContentLoaded", function() {
    fields.firstName = document.getElementById('Name');
    fields.email = document.getElementById('Email');
    fields.address = document.getElementById('Message');
   })

class Users{
    constructor(Name, Email, Message) {
        this.Name = Name;
        this.Email = Email;
        this.Message = Message;
    }
}

function Submit(){
    let user = new Users(Name.value, Email.value, Message.value);
    alert("Thanks for contacting.")
}