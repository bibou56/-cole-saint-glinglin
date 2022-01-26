
const { createClient } = supabase;

const supabaseUrl = "https://wvsfxdbqwtodkhrgiuna.supabase.co";
const supabaseKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNzc3MDY3LCJleHAiOjE5NTgzNTMwNjd9.gOtj-bno7LRNPD_lxZPbRB4jwfqP60xU5Y3__-5Qnak";
 supabase = createClient(supabaseUrl, supabaseKey);

//  let { data } = await supabase
//  .from('formulaire')
//  .select('*')
 
 const form = document.querySelector("form");
 


form.addEventListener("submit", async (event) => {
  event.preventDefault();

  const formInputs = form.querySelectorAll("input, textarea"); 
  console.log(formInputs);
  let submission = {};

  formInputs.forEach((element) => {
    const { value, name } = element;
    // if (value) {
      if(value && name != "objet" && name != "") {
      submission[name] = value;

    }
  });
  
  const { error, data } = await supabase
    .from("formulaire")
    .insert([submission]);
  // if (error) {
  //   alert("erreur");
  // } else {
  //   alert("merci");
  // }
  
  formInputs.forEach((element) => (element.value = ""));
  
});
