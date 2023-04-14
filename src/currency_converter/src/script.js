// country data
const data = [
    { "country": "India", "value": 1 },
    { "country": "Afghanistan", "value": .95 },
    { "country": "China", "value": 11.86 },
    { "country": "Japan", "value": .61 },
    { "country": "Hong-Kong", "value": 10.63 },
];
const idx = { "India": 0, "Afghanistan": 1, "China": 2, "Japan": 3, "Hong-Kong": 4 };
// function to generate the drop-downs dynamically
function getList() {
    let from = "", to = "";
    data.forEach(x => {
        from += `<option value = ${x.country}>${x.country}</option>`;
        to += `<option value = ${x.country}>${x.country}</option>`;
    });
    $("#select-from").html(from);
    $("#select-to").html(to);
}
getList();
// function to convert between to and from countries
function convert(from, to) {
    let fromIdx = idx[from];
    let toIdx = idx[to];
    return data[toIdx].value / data[fromIdx].value;
}
// jQuery starts here
$(document).ready(function () {
    $(document).on('click', '.convert', function () {
        from = $("#select-from").val();
        to = $("#select-to").val();
        amt = $("#input-number").val();
        if (amt >= 0) {
            $("#result").html("Converted Amount : " + amt * convert(from, to));
        }
    })
    $(document).on('click', '#swap-btn', function () {
        from = $("#select-from").val();
        to = $("#select-to").val();
        $("#select-from").val(to);
        $("#select-to").val(from);
        amt = $("#input-number").val();
        if (amt >= 0) {
            $("#result").html("Converted Amount : " + amt * convert(to, from));
        }
    })
    $(document).on('keyup', '#input-number', function () {
        from = $("#select-from").val();
        to = $("#select-to").val();
        amt = $("#input-number").val();
        if (amt >= 0) {
            $("#result").html("Converted Amount : " + amt * convert(from, to));
        }
    })
});