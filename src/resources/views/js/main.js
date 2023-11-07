const contactForm = document.forms.contact;

contactForm.postcode.addEventListener('input', e => {
    fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${e.target.value}`)
        .then(response => response.json())
        .then(data => {
            contactForm.address.value = data.results[0].address;
        })
    .catch(error => console.log(error))
})