const btn = document.getElementById('button');

document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();

  btn.value = 'Aan het versturen...';

  const serviceID = 'service_ylybsgi';
  const templateID = 'template_sfgt99j';

  // Controleer of alle velden zijn ingevuld.
  if (document.getElementById('name').value == "" || document.getElementById('subject').value == "" || document.getElementById('from_name').value == "" || document.getElementById('message').value == "") {
    alert("Zorg ervoor dat alle velden zijn ingevuld!");
    btn.value = 'Verstuur';
    return false;
  }

  // Verstuur mail
  emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Verstuur';
      document.querySelector('.contacted').style.display = 'block';
    }, (err) => {
      btn.value = 'Verstuur';
      alert(JSON.stringify(err));
    });

  // Reset de form na 5 seconden.
  setTimeout(function(){
    document.querySelector('.contacted').style.display = 'none';
    document.getElementById('form').reset();
  }, 5000);
});