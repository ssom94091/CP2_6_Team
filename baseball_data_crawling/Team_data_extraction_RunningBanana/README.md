# Team_data_extraction_RunningBanana

야구 승률 예측을 위한 모델 학습에 사용되는 데이터 폴더 입니다.

실행환경은 다음과 같습니다.

Windows 10 / Anaconda3 4.9.2 version 


### 폴더의 구조는 다음과 같습니다.
```
    baseball_data_processing
      ㄴ defender_data 수비수의 2017년~2020년 데이터 정보가 담긴 폴더
            ㄴ defender_2017~2020.csv 수비수의 2017~2020년 데이터 정보
            ㄴ defender_data_crawling.py 수비수 정보 크롤링을 위한 코드
      ㄴ hitter_data 타자의 2017년~2020년 데이터 정보가 담긴 폴더
            ㄴ hitter_2017~2020.csv 타자의 2017~2020년 데이터 정보
            ㄴ hitter_data_crawling.py 타자 정보 크롤링을 위한 코드
      ㄴ hitter_processing 머신러닝 학습에 쓰일 타자 2017~2020년 데이터 정보
            ㄴ hitter_processing2017~2020.csv 타자의 2017~2020년 데이터 정보
            ㄴ hitter_processing.py 타자 정보 처리 코드
      ㄴ pitcher_data 투수의 2017년~2020년 데이터 정보가 담긴 폴더
            ㄴ pitcher_2017~2020.csv 투수의 2017~2020년 데이터 정보
            ㄴ pitcher_data_crawling.py 투수 정보 크롤링을 위한 코드
      ㄴ pitcher_processing 머신러닝 학습에 쓰일 투수 2017~2020년 데이터 정보
            ㄴ pitcher_processing2017~2020.csv 투수의 2017~2020년 데이터 정보
            ㄴ pitcher_processing.py 투수 정보 처리 코드
            ㄴ replace_NaN.py 투수 누락값 평균값으로 대체 코드
      ㄴ team_data 팀의 2017년~2020년 데이터 정보가 담긴 폴더
            ㄴ team_2017~2020.csv 팀의 2017~2020년 데이터 정보
            ㄴ team_data_crawling.py 팀 정보 크롤링을 위한 코드
      ㄴ training_data 머신러닝 학습에 쓰일 데이타, pithcer_processing2017~2020과 hitter_processing2017~2020 취합한 데이터
            ㄴ 
            ㄴ 
      ㄴ 2019_kbo_player_kaggle_v2.csv 2019년 기준 야구선수들의 정보
      ㄴ team_kbo.csv 82년~2017년 팀 간의 정보
      ㄴ kbo_for_kaggle.py 야구선수 고유값 확인 및 column 정보가 담긴 코드

```              
 
 
### 현재 스크립트에 있는 코드 모두 Pycharm에서 돌아간 환경이므로 스크립트를 열어주면 됩니다.

