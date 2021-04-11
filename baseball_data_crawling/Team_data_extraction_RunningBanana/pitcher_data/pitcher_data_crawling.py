import pandas as pd

'''
2020년
http://www.statiz.co.kr/stat.php?mid=stat&re=1&ys=2020&ye=2020&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR&o2=OutCount&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=270&si=&cn=
연도별 데이터는 url속 년도 숫자를 변경하면서 크롤링
'''

# player 데이터 크롤링
year = 2020
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=1&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR&o2=OutCount&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'WAR', '출장', '완투', '완봉'
                            ,'선발', '승', '패', '세', '홀드', '이닝', '실점', '자책', '타자'
                            , '안타', '2타', '3타', '홈런', '볼넷', '고4', '사구', '삼진'
                            , '보크', '폭투', 'ERA', 'FIP', 'WHIP', 'ERA+', 'FIP+', 'WAR', 'WPA' ])
# print(year_data)

for step in range(0, 271, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'WAR', '출장', '완투', '완봉'
                            ,'선발', '승', '패', '세', '홀드', '이닝', '실점', '자책', '타자'
                            , '안타', '2타', '3타', '홈런', '볼넷', '고4', '사구', '삼진'
                            , '보크', '폭투', 'ERA', 'FIP', 'WHIP', 'ERA+', 'FIP+', 'WAR', 'WPA' ]
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:33], data.iloc[12:22, 0:33], data.iloc[24:34, 0:33]], join='outer')

#year_data.to_csv('pitcher_2020.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지


# 2019년
year = 2019
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=1&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR&o2=OutCount&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'WAR', '출장', '완투', '완봉'
                            ,'선발', '승', '패', '세', '홀드', '이닝', '실점', '자책', '타자'
                            , '안타', '2타', '3타', '홈런', '볼넷', '고4', '사구', '삼진'
                            , '보크', '폭투', 'ERA', 'FIP', 'WHIP', 'ERA+', 'FIP+', 'WAR', 'WPA' ])
# print(year_data)

for step in range(0, 241, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'WAR', '출장', '완투', '완봉'
                            ,'선발', '승', '패', '세', '홀드', '이닝', '실점', '자책', '타자'
                            , '안타', '2타', '3타', '홈런', '볼넷', '고4', '사구', '삼진'
                            , '보크', '폭투', 'ERA', 'FIP', 'WHIP', 'ERA+', 'FIP+', 'WAR', 'WPA' ]
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:33], data.iloc[12:22, 0:33], data.iloc[24:34, 0:33]], join='outer')

year_data.to_csv('pitcher_2019.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지

# 2018년
year = 2018
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=1&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR&o2=OutCount&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'WAR', '출장', '완투', '완봉'
                            ,'선발', '승', '패', '세', '홀드', '이닝', '실점', '자책', '타자'
                            , '안타', '2타', '3타', '홈런', '볼넷', '고4', '사구', '삼진'
                            , '보크', '폭투', 'ERA', 'FIP', 'WHIP', 'ERA+', 'FIP+', 'WAR', 'WPA' ])
# print(year_data)

for step in range(0, 241, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'WAR', '출장', '완투', '완봉'
                            ,'선발', '승', '패', '세', '홀드', '이닝', '실점', '자책', '타자'
                            , '안타', '2타', '3타', '홈런', '볼넷', '고4', '사구', '삼진'
                            , '보크', '폭투', 'ERA', 'FIP', 'WHIP', 'ERA+', 'FIP+', 'WAR', 'WPA' ]
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:33], data.iloc[12:22, 0:33], data.iloc[24:34, 0:33]], join='outer')

year_data.to_csv('pitcher_2018.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지

# 2017년
year = 2017
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=1&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=WAR&o2=OutCount&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'WAR', '출장', '완투', '완봉'
                            ,'선발', '승', '패', '세', '홀드', '이닝', '실점', '자책', '타자'
                            , '안타', '2타', '3타', '홈런', '볼넷', '고4', '사구', '삼진'
                            , '보크', '폭투', 'ERA', 'FIP', 'WHIP', 'ERA+', 'FIP+', 'WAR', 'WPA' ])
# print(year_data)

for step in range(0, 211, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'WAR', '출장', '완투', '완봉'
                            ,'선발', '승', '패', '세', '홀드', '이닝', '실점', '자책', '타자'
                            , '안타', '2타', '3타', '홈런', '볼넷', '고4', '사구', '삼진'
                            , '보크', '폭투', 'ERA', 'FIP', 'WHIP', 'ERA+', 'FIP+', 'WAR', 'WPA' ]
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:33], data.iloc[12:22, 0:33], data.iloc[24:34, 0:33]], join='outer')

year_data.to_csv('pitcher_2017.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지