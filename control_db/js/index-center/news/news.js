btnDatanews = (classset="", num) => {
    return (`
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="${num}" class="${classset}" aria-current="true" aria-label="Slide ${num}"></button>
    `);
}

Datanews = (classset="",imgpath="", texthead="",text="", timeUp="") => {
    return (`
        <div class="carousel-item ${classset} ">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/NewsHeadLine/${imgpath}" class=" img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body fs-6">
                        <h5 class="card-title">${texthead}</h5>
                        <p class="card-text">${text}</p>
                        <p class="card-text"><small class="text-muted">โพสเมื่อ ${timeUp}</small></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    `);
}

//ข่าว
const newsset = new XMLHttpRequest();
newsset.onload = function() {
  const myObj = JSON.parse(this.responseText);
  let text = "";
  let btn = "";
  let no = 0;
  for(let x in myObj){
    text += (no === 0)?  Datanews(
                                    "active",
                                    myObj[x].head_news_image_thumb, 
                                    myObj[x].head_news_text,
                                    myObj[x].activity_text_detail,
                                    myObj[x].datetime_upload
                                ) :  Datanews(
                                                "",
                                                myObj[x].head_news_image_thumb, 
                                                myObj[x].head_news_text,
                                                myObj[x].activity_text_detail,
                                                myObj[x].datetime_upload
                                            );
    btn += (no === 0)? btnDatanews("active", no) : btnDatanews("", no);
    no++;
  }
 document.getElementById("btnslide").innerHTML = btn;
 document.getElementById("dataNews").innerHTML = text;
}
newsset.open("GET", "control_db/php/index-center/news/news.php");
newsset.send();