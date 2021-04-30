# Score_data_extraction_Lemondouble

야구 승률 예측을 위한 모델 학습에 사용되는 데이터 폴더 입니다.

http://www.statiz.co.kr/schedule.php?opt=3&sy=2019 와 같은, 스코어보드를 크롤링하여 csv 파일로 저장합니다.

데이터 포맷은 다음과 같습니다.

Date | Team_1_Name | Team_1_Score | Team_2_Name | Team_2_Score

Date는 yyyy/mm/dd 포맷입니다. 

실행환경은 다음과 같습니다.

Windows 10 / Anaconda3 4.9.2 version / selenium 3.141.0 / chrome driver 89

### 폴더의 구조는 다음과 같습니다.
```
    Score_data_extraction_Lemondouble
      ㄴ get_game_score_data.ipynb -> http://www.statiz.co.kr/schedule.php?opt=3&sy=2019 와 같은 테이블에서 경기 스코어를 추출하여 csv 파일로 저장.
      ㄴ get_game_score_and_entry.ipynb ->  http://www.statiz.co.kr/boxscore.php?opt=1&sopt=1&date=2019-09-07 와 같은 테이블에서, 경기 스코어/투수/타자 엔트리/점수/승패를 추출하여 csv 파일로 저장
      ㄴ chromedriver.exe -> chrome 89 version 드라이버입니다. (get_game_score_data.ipynb 을 실행하는데 필요합니다.)
      ㄴ sample_data_year_2019 -> get_game_score_data.ipynb 스크립트를 이용하여, 2019년 데이터를 추출한 샘플 데이터가 들어있습니다.
          ㄴstatiz_game_data_2019_x.csv -> 3월부터 10월까지, 추출한 데이터들이 담긴 파일들입니다.
      ㄴ sample_data_with_entry ->  get_game_score_and_entry.ipynb 스크립트를 이용하여, 2017, 2018, 2019, 2020년 데이터를 추출한 샘플 데이터들이 들어 있습니다.
```              
 
### 실행 방법은 다음과 같습니다.
```
  1. chrome://version/을 검색하여, 가장 위에 빌드 번호를 찾습니다. (예시 : 89.0.4389.90 (공식 빌드) (64비트) (cohort: Stable))
  2. https://chromedriver.chromium.org/downloads 에 접속하여, 자신의 버전에 맞는 드라이버를 다운받습니다.
  3. 다운받은 드라이버를 현재 폴더로 이동시킵니다. (필요하다면, 현재 이 폴더에 있는 chromedriver를 덮어쓰기합니다.)
  4. Anaconda prompt를 실행시킵니다.
  5. Selenium이 설치되어있지 않다면, pip install selenium 명령어를 이용하여 selenium을 설치합니다.
  6. Prompt 안에서 cd.. 등을 이용하여 이 폴더로 이동합니다.
  7. ipython notebook 커맨드를 입력하여, Jupyter notebook을 실행시킵니다.
  8. Notebook 창에서, 순차적으로 커맨드를 실행해 줍니다. 이 때, 두번째 블록의 year 변수를 바꿔 다른 년도의 데이터를 수집할 수도 있습니다.
```

### 주의 사항은 다음과 같습니다.

```
    get_game_score_and_entry.ipynb 스크립트 사용 시, 올스타전 등 일부 이벤트전의 경우, 스크립트가 다운될 수 있습니다.
    해당 문제는 연간 1회 정도 생기기 때문에, script를 수정하는 것 대신, 해당 날짜를 기준으로 하여 script를 두 번 실행하고, csv 파일을 손으로 합치는 것으로 해결할 수 있습니다.
```
