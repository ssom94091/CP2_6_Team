import pandas as pd
for i in range(2017, 2021):
    # 해당 년도의 투수 데이터를 읽어서 DataFrame 형식으로 가져옴
    table = pd.read_csv('pitcher_' + str(i) + '.csv')
    print(table)

    # 가져온 투수 데이터를 바탕으로 변인을 추출하고, 변인이 아닌 기존 데이터들은 drop하여 변인들만 남기고 저장함

    # 기존 데이터 기억하기 (변인 추출 완료 후에 drop할 데이터)
    ordinary_columns = list(table.columns)
    print(ordinary_columns)

    # 머신 러닝 학습을 위한 변인 추출
    table['승률'] = table['승'] / (table['승'] + table['패'])
    table['피안타율'] = table['안타'] / table['타자']
    table['피홈런율'] = table['홈런'] / table['타자']
    table['이닝당삼진'] = table['삼진'] / table['이닝']
    table['이닝당볼넷'] = table['볼넷'] / table['이닝']
    table['평균자책점'] = (table['자책'] * 9) / table['이닝']
    ordinary_columns.remove('WHIP')
    ordinary_columns.remove('이름')

    # 기존 데이터 drop
    table.drop(ordinary_columns, axis=1, inplace=True)

    print(table)
    print(table.columns)

    #csv 형식으로 저장
    table.to_csv('pitcher_processing'+str(i)+'.csv', encoding='utf-8-sig')