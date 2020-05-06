$(document).ready(function() {
    $restrictedCountriesInput = $('.restricted-countries-select:eq(1)');
    $restrictedCountries = $restrictedCountriesInput.parent().parent();


    firstButtonElement = '<button class="btn btn-success select-all-restricted-countries">All Countries</button>';
    secondButtonElement = '<button class="btn btn-success select-all-us-states">All US States</button>';
    thirdButtonElement = '<button class="btn btn-success clear-all-states">Clear all</button>';

    $restrictedCountries.append(firstButtonElement + secondButtonElement + thirdButtonElement);

    allCountriesKeys = [];
    usaStatesKeys = [];

    $('.restricted-countries-select:eq(1) option').each(function(){
        allCountriesKeys.push($(this).val());
        if ($(this).text().indexOf('United States:') > -1){
            usaStatesKeys.push($(this).val());
        }
    });

    $('.select-all-restricted-countries').on('click', function (event) {
        event.preventDefault();
        $restrictedCountriesInput.select2({ width: '100%' }).val(allCountriesKeys).trigger("change");
    });

    $('.select-all-us-states').on('click', function (event) {
        event.preventDefault();
        $restrictedCountriesInput.select2({ width: '100%' }).val(usaStatesKeys).trigger("change");
    });

    $('.clear-all-states').on('click', function (event) {
        event.preventDefault();
        $restrictedCountriesInput.select2({ width: '100%' }).val([]).trigger("change");
    });

});
