import pandas as pd

# 2020년도
data= pd.read_html("http://www.statiz.co.kr/stat.php?opt=0&sopt=0&re=0&ys=2020&ye=2020&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR_ALL_ADJ&o2=TPA&de=1&lr=5&tr=&cv=&ml=1&sn=30&si=&cn=")
data= pd.DataFrame(data[0])

data= pd.DataFrame(data.iloc[4:13, 0:31])
data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']

data.to_csv('team_2020.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지

#2019년도
data= pd.read_html("http://www.statiz.co.kr/stat.php?opt=0&sopt=0&re=0&ys=2019&ye=2019&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR_ALL_ADJ&o2=TPA&de=1&lr=5&tr=&cv=&ml=1&sn=30&si=&cn=")
data= pd.DataFrame(data[0])

data= pd.DataFrame(data.iloc[4:13, 0:31])
data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']

data.to_csv('team_2019.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지

#2018년도
data= pd.read_html("http://www.statiz.co.kr/stat.php?opt=0&sopt=0&re=0&ys=2018&ye=2018&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR_ALL_ADJ&o2=TPA&de=1&lr=5&tr=&cv=&ml=1&sn=30&si=&cn=")
data= pd.DataFrame(data[0])

data= pd.DataFrame(data.iloc[4:13, 0:31])
data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']

data.to_csv('team_2018.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지

# 2017년도
data= pd.read_html("http://www.statiz.co.kr/stat.php?opt=0&sopt=0&re=0&ys=2017&ye=2017&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR_ALL_ADJ&o2=TPA&de=1&lr=5&tr=&cv=&ml=1&sn=30&si=&cn=")
data= pd.DataFrame(data[0])

data= pd.DataFrame(data.iloc[4:13, 0:31])
data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']

data.to_csv('team_2017.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지