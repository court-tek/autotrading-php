export function autoFilter() {
    let options = document.querySelectorAll('select');
    let make = options[0];
    let model = options[1];
    
    // console.log(item1);
    let populate = (option1) => {
        make = option1[0];
        model = option1[1];
        let optionArray;
        model.innerHTML = "";
        switch (make.value) {
            case "nissan":
                optionArray = ['|', 'silvia|Silvia', 's13silvia|s13 Silvia', 's13180sx|s13 180sx', 's14silvia| s14 Silvia', 's15silvia|s15 Silvia', 'fairladyz|Fairlady Z', 'skyline|Skyline', 'gtr|GTR']
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
                optionArray = ['|', 'rx-7|RX-7', 'rx8|RX-8', 'mazda3|Mazda 3', 'mx-5|MX-5']
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
    }
    
    make.addEventListener('change', function() {
        populate(options);
    });
}