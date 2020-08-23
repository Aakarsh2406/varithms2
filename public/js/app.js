var uiConfig = {
  signInSuccessUrl: 'index.html',
  signInFlow: 'popup',
  signInOptions: [
    firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    firebase.auth.FacebookAuthProvider.PROVIDER_ID,
    firebase.auth.PhoneAuthProvider.PROVIDER_ID,
  ],
  
  tosUrl: '<your-tos-url>',
  privacyPolicyUrl: function() {
    window.location.assign('<your-privacy-policy-url>');
  }
};
var ui = new firebaseui.auth.AuthUI(firebase.auth());
console.log("yahaan tak chal gayaa");
ui.start('#sign-in-options', uiConfig);