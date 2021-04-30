import pandas as pd
for i in range(2017, 2021):
    table = pd.read_csv('pitcher_' + str(i) + '.csv')
    print(table)

    # 기존의 column 기억하기 -> 나중에 drop
    ordinary_columns = list(table.columns)
    print(ordinary_columns)

    table['승률'] = table['승'] / (table['승'] + table['패'])
    table['피안타율'] = table['안타'] / table['타자']
    table['피홈런율'] = table['홈런'] / table['타자']
    table['이닝당삼진'] = table['삼진'] / table['이닝']
    table['이닝당볼넷'] = table['볼넷'] / table['이닝']
    table['평균자책점'] = (table['자책'] * 9) / table['이닝']
    ordinary_columns.remove('WHIP')
    ordinary_columns.remove('이름')

    table.drop(ordinary_columns, axis=1, inplace=True)

    print(table)
    print(table.columns)

    table.to_csv('pitcher_processing'+str(i)+'.csv', encoding='utf-8-sig')