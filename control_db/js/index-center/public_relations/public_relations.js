Data_public_relation = (no, title="", path="", time="") => {
    return (`
            <tr>
                <th scope="row">${no}</th>
                <td><p>${title}</p></td>
                <td><p>${time}</p></td>
                <td><a class="btn btn-primary w-100" href="${path}" role="button" >โหลด</a></td>
            </tr>
    `);
}

const public_relation = new XMLHttpRequest();
public_relation.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    let no = 0;
    for(let x in myObj){
        no++;
        text += Data_public_relation(no, myObj[x].title, myObj[x].file_path, myObj[x].datetime_upload);
    }
    document.getElementById("dataPublicRelation").innerHTML = text;
}
public_relation.open("GET", "control_db/php/index-center/public_relations/public_relations.php");
public_relation.send();