export function autoFilter() {
    let options = document.querySelectorAll('select');
    let make = options[0];
    let model = options[1];
    
    
    // console.log(item1);
    let populate = (option1) => {
        make = option1[0];
        model = option1[1];
        let optionArray;
        // console.log(make.value);
        model.innerHTML = "";
        switch (make.value) {
            case "nissan":
                optionArray = ['|','s13silvia|s13 Silvia', 's13180sx|s13 180sx', 's14silvia| s13 Silvia', 's15silvia|s15 Silvia', 'fairladyz|Fairlady Z']
                break;
            case "toyota":
                optionArray = ['|', 'altezza|Altezza', 'celica|Celica', 'chaser|Chaser', 'mr2|MR2', 'trueno|Sprinter Trueno', 'supra|Supra', 'soarer|Soarer', '86|86']
                 break;
            case "mitsubishi":
                optionArray = ['|', 'eclipse|Eclipse', 'delicastar|Delica Starwagon', 'gto|GTO', 'lancerevo|Lancer Evolution']
                break;
            case "honda":
                optionArray = ['|', 'civic|Civic', 'civictyper|Civic Type R', 'integra|Intrgra', 'nsx|NSX', 'crx|CRX', 'prelude|Prelude', 's2000|S2000']
                break;
            case "mazda":
                optionArray = ['|', 'rx7|RX-7', 'rx8|RX-8', 'mazda3|Mazda 3', 'mx5|MX-5']
                break;
            case "subaru":
                optionArray = ['|', 'impreza|Impreza WRX', 'wrx|wrx', 'wrxsti|WRX STI', 'brz|BRZ', 'stella|Stella', 'legacy|Legacy']
                break;
            default:
                break;
        }

        for (let option in optionArray) {
            let pair = optionArray[option].split('|');
            let newOption = document.createElement('option');
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            model.options.add(newOption);
            console.log(newOption.value = pair[0]);

        }        
        // for (let option in optionArray) {
        //         let pair = optionArray[option].split("|");
        //         let newOption = document.createElement('option');
        //         newOption.value = pair[0];
        //         newOption.value = innerHTML[1];
        //         s2.options.add(newOption)
        //         const element = object[option];       
        // }
    }
    
    make.addEventListener('change', function() {
        populate(options);
    });

    // for (let i = 0; i < fauxArray.length; i++) {
    //     console.log(fauxArray[i]);
    //     //Add operations here
    // }

    // make.addEventListener('change', () => {
    //     make
    //     for (let i = 0; i < make.children.length; i++) {
    //         const element = make.children[i].value;
    //         let set = [];
    //         set.push(element);
    //         console.log(element);
    //         console.log(set);
            
    //     }
    // });
    
    // options[0]
    // for (let i = 0; i < array.length; i++) {
    //     const element = array[i];
        
    // }
    // getMake.addEventListener('change', () => {
    // switch (key) {
    //     case value:
            
    //         break;
    //     default:
    //         break;
    // }
        // fetch(`http://127.0.0.1:8000/api/v1/auto-options/${automake}`).then((response) => {
        //     return response.json();
        // })
        // .then((data) => {
            
        // });
    // })
}