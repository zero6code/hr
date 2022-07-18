
Data = (NO, name, path) => {
   return (`
        <tr>
            <th scope="row">${NO}</th>
            <td><p class="">${name}</p></td>
            <!--<td><p>00-00-0000 00.00น.</p></td>-->
            <td><a class="btn btn-primary w-100" href="${path}" role="button" >โหลด</a></td>
        </tr>
    `);
}

// ส่วนข้าราชการ
const navDocFormI = new XMLHttpRequest();
navDocFormI.onload = function() {
  const myObj = JSON.parse(this.responseText);
  let text = "";
  let no = 0;
  for(let x in myObj){
    no++;
	text += Data(no, myObj[x].docname, myObj[x].docpath);
  }
  document.getElementById("data-doc-form-I").innerHTML = text;
}
navDocFormI.open("GET", "control_db/php/nav/document-forms/government_officer.php");
navDocFormI.send();

// ส่วนพนักงานราชการ
const navDocFormII = new XMLHttpRequest();
navDocFormII.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("data-doc-form-II").innerHTML = text;
}
navDocFormII.open("GET", "control_db/php/nav/document-forms/government_employee.php");
navDocFormII.send();

// ส่วนพนักงานกระทรวงสาธารณสุข
const navDocFormIII = new XMLHttpRequest();
navDocFormIII.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("data-doc-form-III").innerHTML = text;
}
navDocFormIII.open("GET", "control_db/php/nav/document-forms/mh_employee.php");
navDocFormIII.send();

//ลูกจ้างประจำ
const navDocFormIV = new XMLHttpRequest();
navDocFormIV.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("data-doc-form-IV").innerHTML = text;
}
navDocFormIV.open("GET", "control_db/php/nav/document-forms/permanent_employee.php");
navDocFormIV.send();

//ลูกจ้างชั่วคราว
const navDocFormV = new XMLHttpRequest();
navDocFormV.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("data-doc-form-V").innerHTML = text;
}
navDocFormV.open("GET", "control_db/php/nav/document-forms/temporary_worker.php");
navDocFormV.send();

//อื่นๆ
const navDocFormVI = new XMLHttpRequest();
navDocFormVI.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("data-doc-form-VI").innerHTML = text;
}
navDocFormVI.open("GET", "control_db/php/nav/document-forms/other.php");
navDocFormVI.send();

//บรรจุ/เลื่อน/โอน/ย้าย
const lowI = new XMLHttpRequest();
lowI.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("low_I").innerHTML = text;
}
lowI.open("GET", "control_db/php/nav/document-forms/low_I.php");
lowI.send();

//เงินเดือน/ค่าตอบแทน/เงินประจำตำแหน่ง
const lowII = new XMLHttpRequest();
lowII.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("low_II").innerHTML = text;
}
lowII.open("GET", "control_db/php/nav/document-forms/low_II.php");
lowII.send();
//การพัฒนาบุคลากร/IDP/CareerPath
const lowIII = new XMLHttpRequest();
lowIII.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("low_III").innerHTML = text;
}
lowIII.open("GET", "control_db/php/nav/document-forms/low_III.php");
lowIII.send();
//การประเมินผลปฏิบัติราชการ
const lowIV = new XMLHttpRequest();
lowIV.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("low_IV").innerHTML = text;
}
lowIV.open("GET", "control_db/php/nav/document-forms/low_IV.php");
lowIV.send();
//สิทธิประโยชน์/สวัสดิการ
const lowV = new XMLHttpRequest();
lowV.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("low_V").innerHTML = text;
}
lowV.open("GET", "control_db/php/nav/document-forms/low_V.php");
lowV.send();
//วินัย/นิติการ
const lowVI = new XMLHttpRequest();
lowVI.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for (let x in myObj){
        no++;
        text += Data(no, myObj[x].docname, myObj[x].docpath);
    }
    document.getElementById("low_VI").innerHTML = text;
}
lowVI.open("GET", "control_db/php/nav/document-forms/low_VI.php");
lowVI.send();