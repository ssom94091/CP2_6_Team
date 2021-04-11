import pandas as pd

'''
2020년
http://www.statiz.co.kr/stat.php?mid=stat&re=2&ys=2020&ye=2020&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=FR_WAR&o2=OC&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=30&si=&cn=
연도별 데이터는 url속 년도 숫자를 변경하면서 크롤링
'''

# player 데이터 크롤링
# 2020년
year = 2020
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=2&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=FR_WAR&o2=OC&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'WAAwithADJ', '출장', '선발', '이닝'
                            ,'기회', '자살', '보살', '실책', '수비율', 'RF9', 'RNG', 'ARM', 'CS'
                            , 'BLK', 'E+', 'RAA', '/133', 'POSADJ', 'RAAwithADJ', 'WAAw/oADJ', 'WAAwithADJ'])

# print(year_data)

for step in range(0, 571, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'WAAwithADJ', '출장', '선발', '이닝'
                            ,'기회', '자살', '보살', '실책', '수비율', 'RF9', 'RNG', 'ARM', 'CS'
                            , 'BLK', 'E+', 'RAA', '/133', 'POSADJ', 'RAAwithADJ', 'WAAw/oADJ', 'WAAwithADJ']
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:24], data.iloc[12:22, 0:24], data.iloc[24:34, 0:24]], join='outer')

year_data.to_csv('defender_2020.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지

# 2019년
year = 2019
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=2&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=FR_WAR&o2=OC&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'WAAwithADJ', '출장', '선발', '이닝'
                            ,'기회', '자살', '보살', '실책', '수비율', 'RF9', 'RNG', 'ARM', 'CS'
                            , 'BLK', 'E+', 'RAA', '/133', 'POSADJ', 'RAAwithADJ', 'WAAw/oADJ', 'WAAwithADJ'])

# print(year_data)

for step in range(0, 541, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'WAAwithADJ', '출장', '선발', '이닝'
                            ,'기회', '자살', '보살', '실책', '수비율', 'RF9', 'RNG', 'ARM', 'CS'
                            , 'BLK', 'E+', 'RAA', '/133', 'POSADJ', 'RAAwithADJ', 'WAAw/oADJ', 'WAAwithADJ']
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:24], data.iloc[12:22, 0:24], data.iloc[24:34, 0:24]], join='outer')

year_data.to_csv('defender_2019.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지

# 2018년
year = 2018
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=2&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=FR_WAR&o2=OC&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'WAAwithADJ', '출장', '선발', '이닝'
                            ,'기회', '자살', '보살', '실책', '수비율', 'RF9', 'RNG', 'ARM', 'CS'
                            , 'BLK', 'E+', 'RAA', '/133', 'POSADJ', 'RAAwithADJ', 'WAAw/oADJ', 'WAAwithADJ'])

# print(year_data)

for step in range(0, 511, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'WAAwithADJ', '출장', '선발', '이닝'
                            ,'기회', '자살', '보살', '실책', '수비율', 'RF9', 'RNG', 'ARM', 'CS'
                            , 'BLK', 'E+', 'RAA', '/133', 'POSADJ', 'RAAwithADJ', 'WAAw/oADJ', 'WAAwithADJ']
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:24], data.iloc[12:22, 0:24], data.iloc[24:34, 0:24]], join='outer')

year_data.to_csv('defender_2018.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지


# 2017년
year = 2017
url = "http://www.statiz.co.kr/stat.php?mid=stat&re=2&ys=year&ye=year&se=0&te=&tm=&ty=0&qu=auto&po=0&as=&ae=&hi=&un=&pl=&da=1&o1=FR_WAR&o2=OC&de=1&lr=0&tr=&cv=&ml=1&sn=30&pa=start&si=&cn="

year_data = pd.DataFrame(columns=['순', '이름', '팀', 'WAAwithADJ', '출장', '선발', '이닝'
                            ,'기회', '자살', '보살', '실책', '수비율', 'RF9', 'RNG', 'ARM', 'CS'
                            , 'BLK', 'E+', 'RAA', '/133', 'POSADJ', 'RAAwithADJ', 'WAAw/oADJ', 'WAAwithADJ'])

# print(year_data)

for step in range(0, 511, 30):
    temp_url = url.replace('start', str(step))
    temp_url = temp_url.replace('year', str(year))
    data = pd.read_html(temp_url)
    # print(len(data))
    # print(data[0])
    data = data[0]
    data.columns = ['순', '이름', '팀', 'WAAwithADJ', '출장', '선발', '이닝'
                            ,'기회', '자살', '보살', '실책', '수비율', 'RF9', 'RNG', 'ARM', 'CS'
                            , 'BLK', 'E+', 'RAA', '/133', 'POSADJ', 'RAAwithADJ', 'WAAw/oADJ', 'WAAwithADJ']
    year_data = pd.concat([year_data.iloc[:], data.iloc[0:10, 0:24], data.iloc[12:22, 0:24], data.iloc[24:34, 0:24]], join='outer')

year_data.to_csv('defender_2017.csv', index=False, encoding='utf-8-sig')  # 한글깨짐방지