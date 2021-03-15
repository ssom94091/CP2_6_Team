# tesseract_test

오픈소스 라이브러리인 Tesseract-OCR 을 활용한 간단한 스크립트 및, 테스트 데이터를 정리해두는 폴더입니다.

실행환경은 다음과 같습니다.

Windows 10 / Anaconda3 4.9.2 version / tesseractv5.0.0-alpha.20201127


### 폴더의 구조는 다음과 같습니다.
```
    tesseract_test
      ocr_to_string.py -> resource/orc_ori_image 폴더 안의 이미지를 모두 읽어들여 ocr_result_txt에 처리 결과를 생성합니다. 파일명은 같습니다. (1.jpg -> 1.txt)
      ㄴenvs
        ㄴproperty.ini -> ocr_to_string.py에서 처리한 img 폴더와 처리 결과가 생성될 폴더인 txt 폴더의 위치를 지정합니다.
      ㄴresource
        ㄴocr_ori_image -> 해당 폴더에 ocr의 input인 이미지 파일들이 들어갑니다. (수동으로 넣으면 됩니다.)
        ㄴocr_result_txt -> 해당 폴더에 ocr의 output인 txt 파일들이 생성됩니다. (ocr_to_string.py를 실행하면 자동으로 생성됩니다.)
      ㄴresult
        ㄴeng receipt(200 data) -> 영어 영수증 200개의 데이터가 들어 있습니다.
          ㄴ 1000-receipt~1199-receipt : 원본 img들입니다.
            ㄴ language-setting-eng -> tesseract 에서 OCR language setting을 eng로 한 결과물입니다.
              ㄴpsm-3
              ㄴpsm-6  -> tesseract 라이브러리에서 psm 옵션을 각각 3과 6으로 줬을 때 결과를 저장한 폴더입니다.
        ㄴkor receipt(38 data) -> 한글 영수증 38개의 데이터가 들어 있습니다.
          ㄴ 1~38.jpg : 원본 img들입니다.
            ㄴlanguage-setting-kor+eng ->  tesseract 에서 OCR language setting을 eng+kor (한글+영어 동시검출)로 한 결과물입니다.
              ㄴpsm-1~psm-12 -> tesseract 라이브러리에서 psm 옵션을 1에서 12까지 줬을 때 결과를 저장한 폴더입니다.
```              
 
 
### 스크립트(ocr_to_string.py)를 돌리기 위한 환경설정법은 다음과 같습니다.
```
  1. https://joyhong.tistory.com/79 을 참고하여 tesseract를 설치합니다.
  2. https://www.anaconda.com/products/individual 에 방문하여 anaconda individual edition을 설치합니다.
  3. anaconda prompt를 실행하여 pip install pillow , pip install pytesseract 를 입력하여 필요한 라이브러리를 설치합니다.
  4. 이 폴더의 resource/ocr_ori_image 폴더에 OCR 변환할 이미지들을 넣습니다.
  5. anaconda prompt에서 이 폴더로 이동하여 python ocr_to_string.py 를 실행합니다.
```

### psm 옵션이란?
```
osr_to_string.py 중간의 --psm 뒤의 숫자를 수정하여 psm 옵션을 수정할 수 있습니다.
https://github.com/tesseract-ocr/tesseract/blob/master/doc/tesseract.1.asc 에서, tesseract 팀은 psm 옵션을 이렇게 설명하고 있습니다.

--psm N
Set Tesseract to only run a subset of layout analysis and assume a certain form of image. The options for N are:

0 = Orientation and script detection (OSD) only.
1 = Automatic page segmentation with OSD.
2 = Automatic page segmentation, but no OSD, or OCR. (not implemented)
3 = Fully automatic page segmentation, but no OSD. (Default)
4 = Assume a single column of text of variable sizes.
5 = Assume a single uniform block of vertically aligned text.
6 = Assume a single uniform block of text.
7 = Treat the image as a single text line.
8 = Treat the image as a single word.
9 = Treat the image as a single word in a circle.
10 = Treat the image as a single character.
11 = Sparse text. Find as much text as possible in no particular order.
12 = Sparse text with OSD.
13 = Raw line. Treat the image as a single text line,
     bypassing hacks that are Tesseract-specific.

이 내용의 번역본은 다음과 같습니다.

--psm N
레이아웃 분석의 하위 집합 만 실행하고 특정 형태의 이미지를 가정하도록 Tesseract를 설정합니다. N 에 대한 옵션 은 다음과 같습니다.

0 = 방향 및 스크립트 감지 (OSD) 만.
1 = OSD를 사용한 자동 페이지 분할.
2 = 자동 페이지 분할, OSD 또는 OCR 없음. (구현되지 않음)
3 = 완전 자동 페이지 분할, OSD 없음. (기본)
4 = 다양한 크기의 텍스트 열 하나를 가정합니다.
5 = 세로로 정렬 된 텍스트의 단일 블록을 가정합니다.
6 = 단일 텍스트 블록을 가정합니다.
7 = 이미지를 단일 텍스트 줄로 처리합니다.
8 = 이미지를 단일 단어로 취급합니다.
9 = 이미지를 원 안의 단일 단어로 취급합니다.
10 = 이미지를 단일 문자로 취급합니다.
11 = 희소 한 텍스트. 특정 순서없이 가능한 한 많은 텍스트를 찾습니다.
12 = OSD가있는 희소 텍스트.
13 = 원시 라인. 이미지를 단일 텍스트 줄로 취급하고,
     Tesseract와 관련된 해킹을 우회합니다.

```
