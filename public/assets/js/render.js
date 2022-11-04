const floor_number = `
    <div class="form-group">
    <label class="d-flex align-items-center" for="propertyOnFloor"><span class="red ml-3">*</span> <span>Floor Number</span></label>
        <select name="propertyOnFloor" class="form-control show-tick sp-2 sp-2">
            <option value="">-- Floor Number --</option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
            <option value="7" >7</option>
            <option value="8" >8</option>
            <option value="9" >9</option>
            <option value="10" >10</option>
            <option value="11" >11</option>

        </select>
    </div>
`;
const total_floor = `
<div class="form-group">
<label class="d-flex align-items-center" for="totalFloors"><span class="red ml-3">*</span> <span>Total Floors</span></label>
    <select name="totalFloors" class="form-control show-tick sp-2 sp-2">
        <option value="">-- Total Floors --</option>
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        <option value="4" >4</option>
        <option value="5" >5</option>
        <option value="6" >6</option>
        <option value="7" >7</option>
        <option value="8" >8</option>
        <option value="9" >9</option>
        <option value="10" >10</option>
        <option value="11" >11</option>

    </select>
</div>
`;

const plot = `
    <label for="sides"><span class="red ml-3">*</span> Width of road facing the plot (Meter)</label>
    <input class="form-control sp-2" placeholder="Road Width" type="text"/>
`;
const open_sides = `
<label for="sides"><span class="red ml-3">*</span> No of open sides</label>
<select class="form-control sp-2" id="sides">
    <option value="">-- Select --</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</select>
`;

const allow_cons = `
    <label for="cons"><span class="red ml-3">*</span> Floors Allowed for construction</label>
    <select class="form-control sp-2" id="cons">
        <option value="">-- Total Floors --</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
`;

const residential_radio_type1 = `
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Any Construction done</label>
        </div>
        <div>
            <input type="radio" name="radio1"><span> Yes</span>
            <input type="radio" name="radio1"><span> No</span>
        </div>
    </div>
`;
const residential_radio_type2 = `
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Boundary wall made</label>
        </div>
        <div>
            <input type="radio" name="radio2"><span> Yes</span>
            <input type="radio" name="radio2"><span> No</span>
        </div>
    </div>
`;
const residential_radio_type3 = `
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Is in a gated colony</label>
        </div>
        <div>
            <input type="radio" name="radio3"><span> Yes</span>
            <input type="radio" name="radio3"><span> No</span>
        </div>
    </div>
`;

const commercial_radio = `
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Personal Washroom</label>
        </div>
        <div>
            <input type="radio" name="radioCm"><span> Yes</span>
            <input type="radio" name="radioCm"><span> No</span>
        </div>
    </div>
`;
const commercial_radio2 = `
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Pantry/Cafeteria</label>
        </div>
        <div>
            <input type="radio" name="radioCm2"><span> Dry</span>
            <input type="radio" name="radioCm2"><span> Wet</span>
            <input type="radio" name="radioCm2"><span> Not Available</span>
        </div>
    </div>
`;

const commercial_shop_radio3 = `
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Corner Shop</label>
        </div>
        <div>
            <input type="radio" name="radioCS"><span> Yes</span>
            <input type="radio" name="radioCS"><span> No</span>
        </div>
    </div>
`;
const commercial_showroom_radio3 = `
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Corner Shop</label>
        </div>
        <div>
            <input type="radio" name="radioCM"><span> Yes</span>
            <input type="radio" name="radioCM"><span> No</span>
        </div>
    </div>
`;
const commercial_shop_radio4 = `
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Is Main Road Facing</label>
        </div>
        <div>
            <input type="radio" name="radioCS2"><span> Yes</span>
            <input type="radio" name="radioCS2"><span> No</span>
        </div>
    </div>
`;

const floor_open_plot = `
    <div class="row clearfix mt-4">
        <div class="col-sm-6 col-md-6 mb-2">
            ${total_floor}
        </div>
        <div class="col-sm-6 col-md-6 mb-2">
            ${open_sides}
        </div>
        <div class="col-sm-6 col-md-6 mb-2">
            ${plot}
        </div>
    </div>
`;
const common_detail = `
<div class="row mt-4">
    <div class="mb-2 col-md-6 dd">
        <div class="form-line">
            <label class="d-flex align-items-center" for="bedrooms"><span class="red ml-3">*</span> <span>Bedrooms</span></label>
            <select name="bedrooms" class="form-control show-tick sp-2">
                <option value="">-- Bedrooms --</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="5+" >5+</option>
            </select>
        </div>
    </div>
    <div class=" col-md-6 mb-2 col-sm-6">
        <div class="form-line">
            <label class="d-flex align-items-center" for="bathrooms"><span class="red ml-3">*</span> <span>Bathrooms</span></label>
            <select name="bathrooms" class="form-control show-tick sp-2">
                <option value="">-- Bathrooms --</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="5+" >5+</option>
            </select>
        </div>
    </div>
    <div class=" col-md-6 mb-2 col-sm-6">
        <div class="form-line">
            <label class="d-flex align-items-center" for="balconies"><span class="red ml-3">*</span> <span>Balconies</span></label>
            <select name="balconies" class="form-control show-tick sp-2">
                <option value="">-- Balconies --</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="5+" >5+</option>

            </select>
        </div>
    </div>
    <div class=" col-md-6 mb-2 col-sm-6">
        <div class="form-line">
            <label class="d-flex align-items-center" for="furnishing"><span class="red ml-3">*</span> <span>Furnished Status</span></label>
            <select name="furnishing" class="form-control show-tick sp-2">
                <option value="">-- Furnished Status --</option>
                <option value="1" >Fully Furnished</option>
                <option value="2" >Semi-Furnished</option>
                <option value="3" >Un-Furnished</option>

            </select>
        </div>
    </div>

</div>
`;
const washroom = `
<div class="form-line mb-2">
<label class="d-flex align-items-center" for="washroom"><span class="red ml-3">*</span> <span>Washroom</span></label>
<select name="washroom" class="form-control show-tick sp-2">
    <option value="1" >1</option>
    <option value="2" >2</option>
    <option value="3" >3</option>
    <option value="4" >4</option>
    <option value="5" >5</option>

</select>
</div>
`;

const furnished = `
<div class="form-line">
<label class="d-flex align-items-center" for="furnishing"><span class="red ml-3">*</span> <span>Furnished Status</span></label>
    <select name="furnishing" class="form-control sp-2 show-tick">
        <option value="">-- Furnished Status --</option>
        <option value="1" >Fully Furnished</option>
        <option value="2" >Semi-Furnished</option>
        <option value="3" >Un-Furnished</option>
    </select>
</div>
`;
const type_flat = `
    ${common_detail}
    <div class="row clearfix mt-4">
    <div class="col-sm-6">
        ${floor_number}
    </div>
    <div class="col-sm-6">
        ${total_floor}
    </div>
    </div>
`;
const cnsPlotSide = `
<div class="row my-3 mb-4">
<div class="col-sm-6 col-md-6 mb-2">
    ${allow_cons}
</div>
<div class="col-sm-6 col-md-6 mb-2">
    ${open_sides}
</div>
<div class="col-sm-6 col-md-6 mb-2">
    ${plot}
</div>

</div>
`;
const type_residential = `
    ${type_flat}
    ${cnsPlotSide}
`;

const type_villa = `
    ${common_detail}
    ${floor_open_plot}
`;

const type_residential_plot = `
    ${floor_open_plot}
    <div class="row my-3 mb-4">
        <div class="col-sm-6 col-md-6 mb-2">
            ${residential_radio_type1}
        </div>
        <div class="col-sm-6 col-md-6 mb-2">
            ${residential_radio_type2}
        </div>
        <div class="col-sm-6 col-md-6 mb-2">
            ${residential_radio_type3}
        </div>

    </div>
`;

const commercial_office = `
    <div class="row">
        <div class="col-md-6 mb-2">
            ${floor_number}
        </div>
        <div class="col-md-6 mb-2">
            ${total_floor}
        </div>
        <div class="col-md-6 mb-2">
            ${furnished}
        </div>
        <div class="col-md-6 mb-2">
            ${washroom}
        </div>
    </div>
    <div class="row my-3 mb-4">
        <div class="col-md-6 mb-2">
            ${commercial_radio}
        </div>
        <div class="col-md-6 mb-2">
            ${commercial_radio2}
        </div>
    </div>
`;
const zone = `<div class="col-md-6 mb-2">
<div class="form-line">
<label class="d-flex align-items-center" for="land"><span class="red ml-3">*</span> <span>Land Zone</span></label>
    <select name="land" class="form-control sp-2 show-tick">
    <option value="">Select Land Zone</option>

    <option value="36100">Industrial</option>

    <option value="36101">Commercial</option>

    <option value="36102">Residential</option>

    <option value="36108">Transport and Communication</option>

    <option value="36109">Public Utilities</option>

    <option value="36110">Public and Semi Public Use</option>

    <option value="36111">Open Spaces</option>

    <option value="36112">Agricultural Zone</option>

    <option value="36113">Special Economic Zone</option>

    <option value="36114">Natural Conservation Zone</option>

    <option value="36115">Government Use</option>
    </select>
</div>
</div>`;

const land_zone = `
    <div class="row clearfix mt-3">
        ${zone}
        <div class="col-md-6 mb-2">
            <div class="form-group">
                <label class="d-flex align-items-center" for="land"><span class="red ml-3">*</span> <span>Ideal For Businesses</span></label>
                <input class="form-control sp-2" name="land" id="land" placeholder="Please Enter Text">
            </div>
        </div>
    </div>
`;

const land_zone2OTS = `
    <div class="row clearfix mt-3">
        ${zone}
    </div>
`;

const commercial_shop = `
    <div class="row my-3">
        <div class="col-md-6 mb-2">
            ${floor_number}
        </div>
        <div class="col-md-6 mb-2">
            ${total_floor}
        </div>
        <div class="col-md-6 mb-2">
            ${furnished}
        </div>
    </div>
    <div class="row my-3 mb-4">
        <div class="col-md-6 mb-2">
            ${commercial_shop_radio3}
        </div>
        <div class="col-md-6 mb-2">
            ${commercial_shop_radio4}
        </div>
        <div class="col-md-6 mb-2">
            ${commercial_radio}
        </div>
        <div class="col-md-6 mb-2">
            ${commercial_radio2}
        </div>
    </div>
`;

const commercial_showroom = `
    <div class="row my-3">
        <div class="col-md-6 mb-2">
            ${floor_number}
        </div>
        <div class="col-md-6 mb-2">
            ${total_floor}
        </div>
        <div class="col-md-6 mb-2">
            ${furnished}
        </div>
    </div>
    <div class="row my-3 mb-4">
        <div class="col-md-6 mb-2 mb-2">
            ${commercial_showroom_radio3}
        </div>
        <div class="col-md-6 mb-2 mb-2">
            ${commercial_shop_radio4}
        </div>
        <div class="col-md-6 mb-2 mb-2">
            ${commercial_radio}
        </div>
        <div class="col-md-6 mb-2 mb-2">
            ${commercial_radio2}
        </div>
    </div>

`;

const commercial_land = `
<div class="row my-3 mb-4">
    <div class="col-sm-6 col-md-6 mb-2">
        ${allow_cons}
    </div>
    <div class="col-sm-6 col-md-6 mb-2">
        ${open_sides}
    </div>
    <div class="col-sm-6 col-md-6 mb-2">
        ${plot}
    </div>
</div>
<div class="row my-3 mb-4">
    <div class="col-md-6 mb-2 mb-2">
    <div class="d-flex align-items-center">
        <div class="mr-2">
            <label for="">Boundary wall made</label>
        </div>
        <div>
            <input type="radio" name="radioCL"><span> Yes</span>
            <input type="radio" name="radioCL"><span> No</span>
        </div>
        </div>
    </div>
</div>
`;
const warehouse = `
<div class="row my-3">
    <div class="col-md-6 mb-2">
        ${floor_number}
    </div>
    <div class="col-md-6 mb-2">
        ${total_floor}
    </div>
    <div class="col-md-6 mb-2">
        ${furnished}
    </div>
</div>
    ${cnsPlotSide}
`;
 const Industrial_land = `
    ${cnsPlotSide}
    <div class="row my-3 mb-4">
    <div class="col-md-6 mb-2 mb-2">
        ${residential_radio_type1}
    </div>
    <div class="col-md-6 mb-2 mb-2">
        ${residential_radio_type2}
    </div>
</div>
 `;

 const industrial_build = `
    ${total_floor}
 `;
 const industrial_shed = `
    ${cnsPlotSide}
 `;

function propertyType() {
    const typeOfProperty = document.getElementById("typeOfProperty");
    const content = document.getElementById("toggleContent");
    const comercial_offece_space = document.getElementById('comercial_offece_space');
    // const comercial_offece_space2 = document.getElementById('comercial_offece_space2');

    const type = typeOfProperty.value;
    // console.log(type);

    // Residential Part
    if (type === "FA" ) {
        content.innerHTML = "";
        content.innerHTML = type_flat;
        comercial_offece_space.innerHTML = '';
    } else if (type === "RH") {
        content.innerHTML = "";
        content.innerHTML = type_residential;
        comercial_offece_space.innerHTML = '';
    } else if (type === "V") {
        content.innerHTML = "";
        content.innerHTML = type_villa;
        comercial_offece_space.innerHTML = '';
    }  else if (type === "NE") {
        alert("Type Could Not Fount");
        content.innerHTML = "";
        content.innerHTML = '';
        comercial_offece_space.innerHTML = '';
    } else if (type === "RLP") {
        content.innerHTML = "";
        content.innerHTML = type_residential_plot;
        comercial_offece_space.innerHTML = '';
    } else if (type === "PH" || type === 'SA' || type === "BL") {
        content.innerHTML = "";
        content.innerHTML = type_flat;
        comercial_offece_space.innerHTML = '';
    } else if(type === 'COS'){
        // Commercial Part
        content.innerHTML = '';
        content.innerHTML = commercial_office;
        comercial_offece_space.innerHTML = land_zone;
    } else if(type === 'OIT'){
        content.innerHTML = '';
        content.innerHTML = commercial_office;
        comercial_offece_space.innerHTML = land_zone2OTS;
    } else if(type === 'CS'){
        content.innerHTML = '';
        content.innerHTML = commercial_shop;
        comercial_offece_space.innerHTML = land_zone;
    } else if(type === 'CSR'){
        content.innerHTML = '';
        content.innerHTML = commercial_showroom;
        comercial_offece_space.innerHTML = land_zone;
    } else if(type === 'CL'){
        content.innerHTML = '';
        content.innerHTML = commercial_land;
        comercial_offece_space.innerHTML = land_zone2OTS;
    } else if(type === 'WG'){
        content.innerHTML = '';
        content.innerHTML = warehouse;
        comercial_offece_space.innerHTML = land_zone2OTS;
    } else if(type === 'IL'){
        content.innerHTML === '';
        content.innerHTML = Industrial_land;
        comercial_offece_space.innerHTML = '';
    } else if(type === 'IB'){
        content.innerHTML = '';
        content.innerHTML = industrial_build;
        comercial_offece_space.innerHTML = land_zone2OTS;
    } else if(type === 'IS'){
        content.innerHTML = '';
        content.innerHTML = industrial_shed;
        comercial_offece_space.innerHTML = land_zone2OTS;
    }
}
