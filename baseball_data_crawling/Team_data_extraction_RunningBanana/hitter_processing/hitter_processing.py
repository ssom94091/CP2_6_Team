import pandas as pd

for i in range(2017, 2021):
    table = pd.read_csv('hitter_' + str(i) + '.csv')
    print(table)

    # 기존의 column 기억하기 -> 나중에 drop
    ordinary_columns = list(table.columns)
    print(ordinary_columns)

    # table['타율'] = table['안타'] / table['타수']  # 타율: 안타/타수
    table['타수대비홈런'] = table['홈런'] / table['타수']  # 타수대비홈런: 홈런/타수
    table['타수대비삼진'] = table['삼진'] / table['타수']  # 타수대비삼진: 삼진/타수
    table['타수대비사구'] = table['사구'] / table['타수']  # 타수대비사구: 사구/타수
    table['타수대비득점'] = table['득점'] / table['타수']  # 타수대비득점: 득점/타수
    table['타수대비타점'] = table['타점'] / table['타수']  # 타수대비타점: 타점/타수
    table['출루율'] = (table['사구'] + table['안타']) / (table['타수'] + table['사구'] + table['희타'])  # 출루율 : (사구+안타)/(타수+사구+희타)
    table['도루성공률'] = table['도루'] / (table['도루'] + table['도실'])  # 도루성공률 : 도루성공/(도루성공 + 도루실패)
    ordinary_columns.remove('이름')

    table = table.fillna(0)
    print(table)

    table.loc[table['타석'] <= 20, '타율'] = table['타율'].mean(axis=0) * 0.8
    table.loc[table['타석'] <= 20, '타수대비홈런'] = table['타수대비홈런'].mean(axis=0) * 0.8
    table.loc[table['타석'] <= 20, '타수대비삼진'] = table['타수대비삼진'].mean(axis=0) * 1.2 # 신입일수록 삼진은 많이 당한다
    table.loc[table['타석'] <= 20, '타수대비사구'] = table['타수대비사구'].mean(axis=0) * 0.8
    table.loc[table['타석'] <= 20, '타수대비득점'] = table['타수대비득점'].mean(axis=0) * 0.8
    table.loc[table['타석'] <= 20, '타수대비타점'] = table['타수대비타점'].mean(axis=0) * 0.8
    table.loc[table['타석'] <= 20, '출루율'] = table['출루율'].mean(axis=0) * 0.8
    table.loc[table['타석'] <= 20, '도루성공률'] = table['도루성공률'].mean(axis=0) * 0.8

    ordinary_columns.remove('타율')
    table.drop(ordinary_columns, axis=1, inplace=True)
    print(table)
    print(table.columns)

    table.to_csv('hitter_processing' + str(i) + '.csv', encoding='utf-8-sig')
