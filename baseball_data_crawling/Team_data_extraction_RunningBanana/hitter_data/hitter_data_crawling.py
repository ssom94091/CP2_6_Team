import pandas as pd

'''
2020년
http://www.statiz.co.kr/stat.php?mid=stat&re=0&ys=2020&ye=2020&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR_ALL_ADJ&o2=TPA&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=0&si=&cn=
연도별 데이터는 url속 년도 숫자를 변경하면서 크롤링
'''

# player 데이터 크롤링
year = 2020
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=0&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR_ALL_ADJ&o2=TPA&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa'])
# print(year_data)

for step in range(0, 331, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:31], data.iloc[12:22, 0:31], data.iloc[24:34, 0:31]], join='outer')
    print(year_data)
print(year_data)
year_data.to_csv('hitter_2020.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지


# 2019년
year = 2019
year_data = pd.DataFrame(columns=['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa'])
# print(year_data)

for step in range(0, 331, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:31], data.iloc[12:22, 0:31], data.iloc[24:34, 0:31]], join='outer')

# print(year_data)
year_data.to_csv('hitter_2019.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지

# 2018년
year = 2018
year_data = pd.DataFrame(columns=['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa'])
# print(year_data)

for step in range(0, 301, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:31], data.iloc[12:22, 0:31], data.iloc[24:34, 0:31]], join='outer')

# print(year_data)
year_data.to_csv('hitter_2018.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지


# 2017년
year = 2017
year_data = pd.DataFrame(columns=['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa'])
# print(year_data)

for step in range(0, 331, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:31], data.iloc[12:22, 0:31], data.iloc[24:34, 0:31]], join='outer')

# print(year_data)
year_data.to_csv('hitter_2017.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지
# url 형식은 year, start로 표시하여 replace 하면서 크롤링
