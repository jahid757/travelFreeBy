const inputIdArray = ['flight','hotel','package']
let initialKids = 0;


const renderLeadInput = (e) => {
    const element = document.getElementById(e);
    if(element){
        for (let i = 0; i < inputIdArray.length; i++) {
            const singleId = inputIdArray[i];
            document.getElementById(singleId).style.display = 'none'
        }
        element.style.display = 'flex';
    }
    initialKids = 0;
}

// check is city

const checkCity = () => {
    const fromCity = document.getElementById('from').value.replace(/ /g, "");
    const toCity = document.getElementById('to').value.replace(/ /g, "");

    if(toCity && fromCity){
        if(toCity.toLowerCase().trim() == fromCity.toLowerCase().trim()){
            alert("it can't be same")
        }
    }
}




// kids handler

const kidsHandler = (condition,id,renderContainer) => {
    // let = initialKids = initialKidsValue;
    const kids_value = document.getElementById(id);
    if(condition === 'up' && initialKids < 6){
        initialKids = initialKids + 1;
    }else if(condition === 'down' && initialKids > 0){
        initialKids = initialKids - 1;
    }
    kids_value.value = initialKids;
    renderKidsAge(renderContainer)
}

// render kids ages

const renderKidsAge = (id) => {
    const kids_ages_container = document.getElementById(id)
    // if(initialKids === 0){
        kids_ages_container.innerHTML = ''
    // }
    for (let i = 1; i <= initialKids; i++) {
        kids_ages_container.innerHTML += `
        <div class="col-4 mb-2">
        <label class="d-flex align-items-center" for="age${i}"><span class="ml-3"></span> <span>Kids Age (${i}) </span></label>
        <select name="age${i}" class="form-control show-tick" value="{{ old('age${i}') }}">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
            </div>
        `
    }
    // console.log(initialKids)
}
