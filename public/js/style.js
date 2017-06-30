var chapterContent = document.getElementById('chapterContent');

if(chapterContent !== null){
  addEventListener('keydown',function (e){
    // initation
    var lokasi =document.location.toString();
    var target = lokasi.split('/');

    var mangaSlug = target[6];
    var chapterNo = parseInt(target[7]);

    if(e.key == 'ArrowRight'){
      chapterNo = chapterNo + 1;
      document.location.href = "http://localhost/realpi/home/manga/"+mangaSlug+"/"+chapterNo;
      return true;
    }

    if(e.key == 'ArrowLeft'){
      chapterNo = chapterNo - 1;
      document.location.href = "http://localhost/realpi/home/manga/"+mangaSlug+"/"+chapterNo;
      return true;
    }

  });
}
