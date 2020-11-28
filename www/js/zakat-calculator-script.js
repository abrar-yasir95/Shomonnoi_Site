// Gold start
function calculate24gold() {
    var x = document.getElementById('24goldWeight').value;
    var y = document.getElementById('24goldUnitPrice').value;
    var z = document.getElementById('24goldResult').value;

    var result = (Number(x) * Number(y)) * 0.025;
    $('#24goldResult').val(result);

    calculateTotalGold();
    calculateTotalZakat();
}

function calculate22gold() {
    var x = document.getElementById('22goldWeight').value;
    var y = document.getElementById('22goldUnitPrice').value;
    var z = document.getElementById('22goldResult').value;

    var result = (Number(x) * Number(y)) * 0.025;
    $('#22goldResult').val(result);

    calculateTotalGold();
    calculateTotalZakat();
}

function calculate18gold() {
    var x = document.getElementById('18goldWeight').value;
    var y = document.getElementById('18goldUnitPrice').value;
    var z = document.getElementById('18goldResult').value;

    var result = (Number(x) * Number(y)) * 0.025;
    $('#18goldResult').val(result);

    calculateTotalGold();
    calculateTotalZakat();
}

function calculateOtherGold() {
    var x = document.getElementById('otherGoldValue').value;
    var z = document.getElementById('otherGoldResult').value;

    var result = Number(x) * 0.025;
    $('#otherGoldResult').val(result);

    calculateTotalGold();
    calculateTotalZakat();
}

function calculateTotalGold() {
    var x = document.getElementById('24goldResult').value;
    var y = document.getElementById('22goldResult').value;
    var z = document.getElementById('18goldResult').value;
    var a = document.getElementById('otherGoldResult').value;

    if(isNaN(x)){x=0;}
    if(isNaN(y)){y=0;}
    if(isNaN(z)){z=0;}
    if(isNaN(a)){a=0;}

    var result = Number(x) + Number(y) + Number(z) + Number(a);

    $('#totalGold').val(result);
    calculateTotalZakat();
}
// Gold end


// Stone start
function calculatePreciousStoneTotal() {
    var x = document.getElementById('preciousStoneValue').value;

    var result = Number(x) * 0.025;
    $('#totalPreciousStone').val(result);

    //calculatePreciousStoneTotal();
    calculateTotalZakat();
}
// Stone end

// Silver start
function calculateTotalSilver() {

    var x = document.getElementById('silverWeight').value;
    var y = document.getElementById('silverUnitPrice').value;

    var result = (Number(x) * Number(y)) * 0.025;
    $('#totalSilver').val(result);

    // calculateTotalSilver();
    calculateTotalZakat();
}
// Silver end

// Cash start
function calculateCash() {
    var x = document.getElementById('cashHandValue').value;
    var y = document.getElementById('cashBankSavingsValue').value;
    var z = document.getElementById('cashBankCurrentValue').value;
    var a = document.getElementById('cashDepositValue').value;

    var r1 = Number(x) * 0.025;
    $('#totalHandCash').val(r1);
    var r2 = Number(y) * 0.025;
    $('#totalBankSavings').val(r2);
    var r3 = Number(z) * 0.025;
    $('#totalBankCurrent').val(r3);
    var r4 = Number(a) * 0.025;
    $('#totalDeposit').val(r4);

    calculateTotalCash();
}

function calculateTotalCash() {
    var x = document.getElementById('totalHandCash').value;
    var y = document.getElementById('totalBankSavings').value;
    var z = document.getElementById('totalBankCurrent').value;
    var a = document.getElementById('totalDeposit').value;

    if(isNaN(x)){x=0;}
    if(isNaN(y)){y=0;}
    if(isNaN(z)){z=0;}
    if(isNaN(a)){a=0;}

    var result = Number(x) + Number(y) + Number(z) + Number(a);
    $('#totalCash').val(result);

    calculateTotalZakat();
}
// Cash end

// Other monetary asset start
function calculateMonetaryAsset() {

    var a = document.getElementById('loanRelativesValue').value;
    var b = document.getElementById('bondsValue').value;
    var c = document.getElementById('providentFundValue').value;
    var d = document.getElementById('insuranceValue').value;
    var e = document.getElementById('stockValue').value;
    var f = document.getElementById('depositValue').value;
    var g = document.getElementById('investmentValue').value;
    var h = document.getElementById('otherWealthValue').value;

    var re1 = Number(a) * 0.025;
    $('#totalLoanRelatives').val(re1);
    var re2 = Number(b) * 0.025;
    $('#totalBonds').val(re2);
    var re3 = Number(c) * 0.025;
    $('#totalProvidentFund').val(re3);
    var re4 = Number(d) * 0.025;
    $('#totalInsurance').val(re4);
    var re5 = Number(e) * 0.025;
    $('#totalStock').val(re5);
    var re6 = Number(f) * 0.025;
    $('#totalDeposit').val(re6);
    var re7 = Number(g) * 0.025;
    $('#totalInvestment').val(re7);
    var re8 = Number(h) * 0.025;
    $('#totalOtherWealth').val(re8);

    calculateTotalMonetaryAsset();
}

function calculateTotalMonetaryAsset() {
    var a = document.getElementById('totalLoanRelatives').value;
    var b = document.getElementById('totalBonds').value;
    var c = document.getElementById('totalProvidentFund').value;
    var d = document.getElementById('totalInsurance').value;
    var e = document.getElementById('totalStock').value;
    var f = document.getElementById('totalDeposit').value;
    var g = document.getElementById('totalInvestment').value;
    var h = document.getElementById('totalOtherWealth').value;

    if(isNaN(a)){a=0;}
    if(isNaN(b)){b=0;}
    if(isNaN(c)){c=0;}
    if(isNaN(d)){d=0;}
    if(isNaN(e)){e=0;}
    if(isNaN(f)){f=0;}
    if(isNaN(g)){g=0;}
    if(isNaN(h)){h=0;}

    var result = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h);
    $('#totalMonetaryAsset').val(result);

    calculateTotalZakat();
}
// Other monetary asset end

// Property start
function calculateProperty() {
    var a = document.getElementById('landValue').value;
    var b = document.getElementById('rentalValue').value;

    var pro1 = Number(a) * 0.025;
    $('#totalLandValue').val(pro1);
    var pro2 = Number(b) * 0.025;
    $('#totalRentalValue').val(pro2);

    calculateTotalProperty();
}

function calculateTotalProperty() {
    var a = document.getElementById('totalLandValue').value;
    var b = document.getElementById('totalRentalValue').value;

    if(isNaN(a)){a=0;}
    if(isNaN(b)){b=0;}

    var result = Number(a) + Number(b);
    $('#totalProperty').val(result);

    calculateTotalZakat();
}
// Property end

// Business start
function calculateBusiness() {
    var a = document.getElementById('saleableStockValue').value;
    var b = document.getElementById('deadStockValue').value;
    var c = document.getElementById('creditSalesValue').value;
    var d = document.getElementById('payableSuppliersValue').value;
    var e = document.getElementById('badDebtsValue').value;

    var b1 = Number(a) * 0.025;
    $('#totalSaleableStock').val(b1);
    var b2 = Number(b) * 0.025;
    $('#totalDeadStock').val(b2);
    var b3 = Number(c) * 0.025;
    $('#totalCreditSales').val(b3);
    var b4 = Number(d) * 0.025;
    $('#totalPayableSuppliers').val(b4);
    var b5 = Number(e) * 0.025;
    $('#totalBadDebts').val(b5);

    calculateTotalBusiness();
}

function calculateTotalBusiness() {
    var a = document.getElementById('totalSaleableStock').value;
    var b = document.getElementById('totalDeadStock').value;
    var c = document.getElementById('totalCreditSales').value;
    var d = document.getElementById('totalPayableSuppliers').value;
    var e = document.getElementById('totalBadDebts').value;

    if(isNaN(a)){a=0;}
    if(isNaN(b)){b=0;}
    if(isNaN(c)){c=0;}
    if(isNaN(d)){d=0;}
    if(isNaN(e)){e=0;}

    var re = Number(a) + Number(b) + Number(c);
    var res = Number(d) + Number(e);
    var result = Number(re) - Number(res);
    $('#totalBusiness').val(result);

    calculateTotalZakat();
}
// Business end

// Firm share start
function calculateFirmShare() {
    var a = document.getElementById('capitalValue').value;
    var b = document.getElementById('advancedLoanValue').value;
    var c = document.getElementById('withdrawalValue').value;
    var d = document.getElementById('profitValue').value;


    var s1 = Number(a) * 0.025;
    $('#totalCapital').val(s1);
    var s2 = Number(b) * 0.025;
    $('#totalAdvancedLoan').val(s2);
    var s3 = Number(c) * 0.025;
    $('#totalWithdrawal').val(s3);
    var s4 = Number(d) * 0.025;
    $('#totalProfit').val(s4);

    calculateTotalFirmShare();
}

function calculateTotalFirmShare() {
    var a = document.getElementById('totalCapital').value;
    var b = document.getElementById('totalAdvancedLoan').value;
    var c = document.getElementById('totalWithdrawal').value;
    var d = document.getElementById('totalProfit').value;

    if(isNaN(a)){a=0;}
    if(isNaN(b)){b=0;}
    if(isNaN(c)){c=0;}
    if(isNaN(d)){d=0;}

    var res1 = Number(a) + Number(b) + Number(d);
    var res2 = Number(c);
    var result = Number(res1) - Number(res2);
    $('#totalFirmShare').val(result);

    calculateTotalZakat();
}
// Firm share end


// Agriculture start
function calculateAgriculture() {
    var a = document.getElementById('rainProductValue').value;
    var b = document.getElementById('artificialProductValue').value;
    var c = document.getElementById('partialProductValue').value;

    var a1 = Number(a) * 0.1;
    $('#totalRainProduct').val(a1);
    var a2 = Number(b) * 0.05;
    $('#totalArtificialProduct').val(a2);
    var a3 = Number(c) * 0.075;
    $('#totalPartialProduct').val(a3);

    calculateTotalAgriculture();
}

function calculateTotalAgriculture() {
    var a = document.getElementById('totalRainProduct').value;
    var b = document.getElementById('totalArtificialProduct').value;
    var c = document.getElementById('totalPartialProduct').value;

    if(isNaN(a)){a=0;}
    if(isNaN(b)){b=0;}
    if(isNaN(c)){c=0;}

    var result = Number(a) + Number(b) + Number(c);
    $('#totalAgriculture').val(result);

    calculateTotalZakat();
}
// Agriculture end

// Farming start
function calculateFarming() {
    var a = document.getElementById('farmingValue').value;

    if(isNaN(a)){a=0;}

    var res = (Number(a) / 40) * 0.025;
    $('#totalFarming').val(res);

    calculateTotalFarming();
}

function calculateTotalFarming() {
    var a = document.getElementById('totalFarming').value;

    if(isNaN(a)){a=0;}

    var result = Number(a);
    $('#totalFarming').val(result);

    calculateTotalZakat();
}
// Farming end

// Liabilities start
function calculateLiabilities() {
    var a = document.getElementById('personalPaybackValue').value;
    var b = document.getElementById('taxPayableValue').value;

    var li1 = Number(a) * 0.025;
    $('#totalPersonalPayback').val(li1);
    var li2 = Number(b) * 0.025;
    $('#totalTaxPayable').val(li2);

    calculateTotalLiabilities();
}

function calculateTotalLiabilities() {
    var a = document.getElementById('totalPersonalPayback').value;
    var b = document.getElementById('totalTaxPayable').value;

    if(isNaN(a)){a=0;}
    if(isNaN(b)){b=0;}

    var result = Number(a) + Number(b);
    $('#totalLiabilities').val(result);

    calculateTotalZakat();
}
// Liabilities end


function calculateTotalZakat() {
    var a = document.getElementById('totalGold').value;
    var b = document.getElementById('totalPreciousStone').value;
    var c = document.getElementById('totalSilver').value;
    var d = document.getElementById('totalCash').value;
    var e = document.getElementById('totalMonetaryAsset').value;
    var f = document.getElementById('totalProperty').value;
    var g = document.getElementById('totalBusiness').value;
    var h = document.getElementById('totalFirmShare').value;
    var i = document.getElementById('totalAgriculture').value;
    var j = document.getElementById('totalFarming').value;
    var k = document.getElementById('totalLiabilities').value;

    if(isNaN(a)){a=0;}
    if(isNaN(b)){b=0;}
    if(isNaN(c)){c=0;}
    if(isNaN(d)){d=0;}
    if(isNaN(e)){e=0;}
    if(isNaN(f)){f=0;}
    if(isNaN(g)){g=0;}
    if(isNaN(h)){h=0;}
    if(isNaN(i)){i=0;}
    if(isNaN(j)){j=0;}
    if(isNaN(k)){k=0;}

    var re = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f) + Number(g) + Number(h) + Number(i) + Number(j);
    var res = Number(k);
    var result = Number(re) - Number(res);

    $('#totalZakat').val(result);
}


var zakat = document.getElementById('zakat');

var typewriter = new Typewriter(zakat, {
    loop: true
});

typewriter.typeString('Zakat Calculator')
    .pauseFor(2500)
    .deleteAll()
    .typeString('যাকাত ক্যালকুলেটর')
    .pauseFor(2500)
    .start();
