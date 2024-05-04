// get ALL query params
console.log("string")
const urlParams = new URLSearchParams(window.location.search);
const opj={

}
 urlParams.forEach((opject,key) =>{
    opj[key]=opject
})

console.log("opj",opj)
// HYPERLINK("http://localhost/Khalidphp/index.php?receipt_no="&[Receipt No.]&"&total_amount="&[Total Amount]&"&address="&[Address]&"&shop_phone="&[Shop Phone]&"&print="&[Print]&"&Date="&Salse Receipt[CreateTime]&"&items="&Salse Receipt[File]&"&item_test="&Sales[Item Name], "طباعة سريعة")


// HYPERLINK("http://localhost/Khalidphp/index.php?receipt_no="&[Receipt No.]&"&total_amount="&[Total Amount]&"&amount_Paid="&[Amount Paid]&"&address="&[Address]&"&Shop_Name="&[Shop Name]&"&shop_phone="&[Shop Phone]&"&print="&[Print]&"&time="&[time]&"&date="&[Date]&"&item_name="&select(Sales[Item Name],[Receipt No.]=[_THISROW].[Receipt No.])&"&item_qty="&select(Sales[QTY],[Receipt No.]=[_THISROW].[Receipt No.])&"&item_price="&select(Sales[Unit Price],[Receipt No.]=[_THISROW].[Receipt No.])&"&item_amount="&select(Sales[Amount],[Receipt No.]=[_THISROW].[Receipt No.]), "طباعة سريعة")