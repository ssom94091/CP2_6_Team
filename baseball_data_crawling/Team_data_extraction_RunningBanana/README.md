# Team_data_extraction_RunningBanana

야구 승률 예측을 위한 모델 학습에 사용되는 데이터 폴더 입니다.

실행환경은 다음과 같습니다.

Windows 10 / Anaconda3 4.9.2 version 


### 폴더의 구조는 다음과 같습니다.
```
    baseball_data_processing
      ㄴ statiz_data_crawling.py 야구 팀간의 데이터 정보를 http://www.statiz.co.kr/main.php 에서 연도별로 data2017~2020 csv형태로 추출.
      ㄴ team2017~2020.csv 연도별 팀간의 정보
      ㄴ team_kbo.csv 82년~2017년 팀간의 정보
      ㄴ 2019_kbo_player_kaggle_v2.csv 2019년 기준 야구선수들의 정보
      ㄴ kbo_for_kaggle.py 야구선수 고유값 확인 및 column 정보가 담긴 코드
      ㄴ player_data_crawling.py 야구선수 정보 크롤링을 위한 코드
      ㄴ player_2017~2020.csv 모든 포지션 야구선수 2017~2020년 데이터 정보
```              
 
 
### 현재 스크립트에 있는 코드 모두 Pycharm에서 돌아간 환경이므로 스크립트를 열어주면 됩니다.

