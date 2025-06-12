  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-app.js";
  import { getAuth,  GoogleAuthProvider , signInWithPopup } from "https://www.gstatic.com/firebasejs/11.8.1/firebase-auth.js";
 
  const firebaseConfig = {
    apiKey: "AIzaSyBXjrhPL_xieq69Dko4E2kJTTA_5ZP1OMs",
    authDomain: "zalooda.firebaseapp.com",
    projectId: "zalooda",
    storageBucket: "zalooda.firebasestorage.app",
    messagingSenderId: "628915668051",
    appId: "1:628915668051:web:cd7882a4a638d441c072a6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  auth.languageCode = 'en'; // Set the language code to English
  const provider = new GoogleAuthProvider();
  

  const googleButton = document.getElementById('loginGoogle');
  googleButton.addEventListener("click", function(event){
    event.preventDefault();
    signInWithPopup(auth, provider)
    .then((result) => {
        const credential = GoogleAuthProvider.credentialFromResult(result);
        const token = credential.accessToken;
        const user = result.user;
        window.location.href = "index.html"; // Redirect to index page after successful login
    }).catch((error) => {
        // Handle Errors here.
        const errorCode = error.code;
        const errorMessage = error.message;
        const email = error.customData.email;
        const credential = GoogleAuthProvider.credentialFromError(error);
    });
  })
  