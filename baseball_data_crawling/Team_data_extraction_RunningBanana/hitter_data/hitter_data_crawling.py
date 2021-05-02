import pandas as pd

'''
2020년
http://www.statiz.co.kr/stat.php?mid=stat&re=0&ys=2020&ye=2020&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR_ALL_ADJ&o2=TPA&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=0&si=&cn=
연도별 데이터는 url속 년도 숫자를 변경하면서 크롤링
'''

# player 데이터 크롤링

# 2020년
year = 2020
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=0&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR_ALL_ADJ&o2=TPA&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

# 크롤링할 데이터의 column을 바탕으로 DataFrame을 만듦
year_data = pd.DataFrame(columns=['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa'])
# print(year_data)


for step in range(0, 331, 30):
    # step : url 내의 start 문자를 대체함
    # step이 나타내는 것은 추출하기 시작할 선수의 번호임
    # 해당 사이트에서 한 페이지에 30명씩 나열되어 있으므로 step size를 30으로 함
    temp_url = url.replace('start', str(step))

    # year : url 내의 year 문자를 대체함
    # year이 나타내는 것은 추출할 년도임
    temp_url = temp_url.replace('year', str(year))

    # 해당 url 내의 표를 불러와 저장
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'war', 'g', '타석', '타수'
                            ,'득점', '안타', '2타', '3타', '홈런', '루타', '타점', '도루', '도실'
                            , '볼넷', '사구', '고4', '삼진', '병살', '희타', '희비', '타율'
                            , '출루', '장타', 'ops', 'woba', 'wrc+', 'war', 'wpa']

    # 불러온 표 중에서 필요한 부분만 추출하여 이어붙임
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:31], data.iloc[12:22, 0:31], data.iloc[24:34, 0:31]], join='outer')

#print(year_data)

# 추출한 표를 csv 형식으로 저장함
year_data.to_csv('hitter_2020.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지


# 위와 동일한 방법으로 2019년, 2018년, 2017년의 데이터도 크롤링

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
