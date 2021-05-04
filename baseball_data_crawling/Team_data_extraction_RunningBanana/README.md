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
            ㄴ training_data2017~2020.csv 머신러닝 학습에 쓰일 데이터
            ㄴ training_data_drop2017~2020.csv 머신러닝 학습에 쓰일 데이터, 쓸데없는 column 제거
            ㄴ training_data_all.csv 위 drop2017~2020.csv 파일을 하나의 csv파일로 합친 것
            ㄴ training_set.ipynb 머신러닝 학습에 쓰일 데이터 추출 코드, 실행환경 쥬피터노트북
      ㄴ 2019_kbo_player_kaggle_v2.csv 2019년 기준 야구선수들의 정보
      ㄴ team_kbo.csv 82년~2017년 팀 간의 정보
      ㄴ kbo_for_kaggle.py 야구선수 고유값 확인 및 column 정보가 담긴 코드

```              
 
 
### 현재 스크립트에 있는 코드 모두 Pycharm에서 돌아간 환경이므로 스크립트를 열어주면 됩니다.

### ML에 필요한 training_data_all Generate하는 방법

```
    1. hitter_processing/hitter_processing.py 를 열고, 상단의 new_hitter_factor와 new_hitter_strike_out_factor를 조절한다.
       해당 값은, 20경기 미만의 신인 선수인 경우, 20경기 이상 출전한 기존 선수에 비해 신인 선수가 몇% 실력이 부진하고, 몇% 삼진을 더 당하는지 나타낸다.
       이후, hitter_processing.py를 실행하여 csv 파일들을 생성한다.
    2. pitcher_processing/pitcher_processing.py를 실행한다. 이후 replace_NAN 파일을 실행하여 pitcher.csv에서 생긴 NaN값을 대체해 준다.
    3. Jupyter notebook으로 training_set.ipynb를 실행하고, 처음부터 script들을 실행시킨다. 이 때, 마지막에서 두 번째 Script는 처리하는데 시간이 걸리므로,
       "Job Finish" 문구를 확인할 때 까지 기다린다. 이후, 마지막 Script를 실행하면 training_data_all.csv 파일이 생성된다.
    4. 프로젝트 Root 폴더에서, machine_learning 폴더에 들어가 Randomforest training.ipynb 파일을 실행시킨다.

    # 모든 파일들은 상대 경로로 연결되어 있으므로, 별도로 파일 이름을 건드리지 않는다면 실행됩니다.
```
