// import { createClient } from '@supabase/supabase-js'

// const supabaseUrl = process.env.SUPABASE_URL
// const supabaseKey = process.env.SUPABASE_KEY
// const supabase = createClient(supabaseUrl, supabaseKey)

let adresse = document.querySelector("#address");
let wrapper = document.getElementById('wrapper');


adresse.addEventListener('input', function search() {
            if (adresse.value.length > 0) {
                fetch("https://api-adresse.data.gouv.fr/search/?q=" + adresse.value + "&limit=6")
                    .then(response => response.json())
                    .then(data => {
                            let result = data.features;

                            wrapper.innerHTML = "";
                            if (result.length) {
                                for (let i = 0; i < result.length; i++) {
                                    let li = document.createElement('li');
                                    li.innerText = result[i].properties.label;

                                    wrapper.appendChild(li);

                                    li.addEventListener('click', displayaddress);

                                    function displayaddress() {
                                        adresse.value = li.innerText;

                                        wrapper.innerHTML = "";
                                    }
                                }

                            }
                        });
                    }else{
                        wrapper.innerHTML = "";
                    }
                    });