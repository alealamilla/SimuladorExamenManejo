// const submitLogin = async (formElement, event) => {
//     event.preventDefault();
//     let form = new FormData(formElement);
//     let url =  route('entrar') ; // Blade will render this correctly
//     let init = {
//         body: form,
//         method: "POST",
//         headers: {
//             "X-CSRF-TOKEN": document.getElementById("csrf-token").getAttribute('content'),
//             "Accept": "application/json"
//         }
//     };
//     console.log('URL:', url); // Log the URL to verify
//     try {
//         let req = await fetch(url, init);
//         if (req.ok) {
//             let res = await req.json();
//             console.log('Success:', res); // Log success response for debugging
//             window.location.href = "{{ route('home') }}"; // Redirect on success
//         } else {
//             let res = await req.json();
//             console.log('Error:', res); // Log error response for debugging
//             Swal.fire({
//                 title: 'Error',
//                 text: res.message || 'Hey',
//                 icon: "error"
//             });
//             document.getElementById("password").value = "";
//         }
//     } catch (error) {
//         console.error('Request failed:', error); // Log fetch error
//         Swal.fire({
//             title: 'Error',
//             text: 'An unexpected error occurred.',
//             icon: "error"
//         });
//     }
// }

const submitLogin = async (formElement, event) => {
    event.preventDefault();
    let form = new FormData(formElement);
    let mail = document.getElementById("email").value;
    let url =  route('checkmail', mail) 
    window.location.href = url;
   
}