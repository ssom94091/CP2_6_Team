import pandas as pd

new_hitter_factor = 0.7
new_hitter_three_strike_out_factor = 1.3 # 신인일수록 삼진은 많이 당한다

for i in range(2017, 2021):
    # 해당 년도의 타자 데이터를 읽어서 DataFrame 형식으로 가져옴
    table = pd.read_csv('../hitter_data/hitter_' + str(i) + '.csv')
    #print(table)

    # 가져온 투수 데이터를 바탕으로 변인을 추출하고, 변인이 아닌 기존 데이터들은 drop하여 변인들만 남기고 저장함

    # 기존 데이터 기억하기 (변인 추출 완료 후에 drop할 데이터)
    ordinary_columns = list(table.columns)
    #print(ordinary_columns)

    # 머신 러닝 학습을 위한 변인 추출
    # table['타율'] = table['안타'] / table['타수']  # 타율: 안타/타수 # 타율은 기존에 크롤링한 데이터에 명시되어 있기 때문에 해당 데이터를 사용
    table['타수대비홈런'] = table['홈런'] / table['타수']  # 타수대비홈런: 홈런/타수
    table['타수대비삼진'] = table['삼진'] / table['타수']  # 타수대비삼진: 삼진/타수
    table['타수대비사구'] = table['사구'] / table['타수']  # 타수대비사구: 사구/타수
    table['타수대비득점'] = table['득점'] / table['타수']  # 타수대비득점: 득점/타수
    table['타수대비타점'] = table['타점'] / table['타수']  # 타수대비타점: 타점/타수
    table['출루율'] = (table['사구'] + table['안타']) / (table['타수'] + table['사구'] + table['희타'])  # 출루율 : (사구+안타)/(타수+사구+희타)
    table['도루성공률'] = table['도루'] / (table['도루'] + table['도실'])  # 도루성공률 : 도루성공/(도루성공 + 도루실패)
    table['선수OPS'] = table['ops']
    table['선수WAR'] = table['war']
    ordinary_columns.remove('이름')

    # table의 모든 NaN을 0으로 대체
    table = table.fillna(0)
    #print(table)

    # 타석에 들어선 횟수가 20번 이하인 경우에는 신인으로 간주하여 선수 평균보다 낮은 값으로 설정
    table.loc[table['타석'] <= 20, '타율'] = table['타율'].mean(axis=0) * new_hitter_factor
    table.loc[table['타석'] <= 20, '타수대비홈런'] = table['타수대비홈런'].mean(axis=0) * new_hitter_factor
    table.loc[table['타석'] <= 20, '타수대비삼진'] = table['타수대비삼진'].mean(axis=0) * new_hitter_three_strike_out_factor # 신인일수록 삼진은 많이 당한다
    table.loc[table['타석'] <= 20, '타수대비사구'] = table['타수대비사구'].mean(axis=0) * new_hitter_factor
    table.loc[table['타석'] <= 20, '타수대비득점'] = table['타수대비득점'].mean(axis=0) * new_hitter_factor
    table.loc[table['타석'] <= 20, '타수대비타점'] = table['타수대비타점'].mean(axis=0) * new_hitter_factor
    table.loc[table['타석'] <= 20, '출루율'] = table['출루율'].mean(axis=0) * new_hitter_factor
    table.loc[table['타석'] <= 20, '도루성공률'] = table['도루성공률'].mean(axis=0) * new_hitter_factor
    table.loc[table['타석'] <= 20, '선수OPS'] = table['선수OPS'].mean(axis=0) * new_hitter_factor
    table.loc[table['타석'] <= 20, '선수WAR'] = 0

    #타율 관련 정보는 drop되어서는 안되므로 ordinary_columns에서 삭제
    ordinary_columns.remove('타율')

    # 기존 데이터 drop
    table.drop(ordinary_columns, axis=1, inplace=True)

    # 신인 선수 데이터 추가, 만약 이후 엔트리 데이터 처리할 때, 데이터가 없는 타자가 나온다면 신인으로 처리한다.
    new_data = {
        '이름' : '신인',
        '타율' : table['타율'].mean(axis=0) * new_hitter_factor,
        '타수대비홈런' : table['타수대비홈런'].mean(axis=0) * new_hitter_factor,
        '타수대비삼진' : table['타수대비삼진'].mean(axis=0) * new_hitter_three_strike_out_factor,
        '타수대비사구' : table['타수대비사구'].mean(axis=0) * new_hitter_factor,
        '타수대비득점' : table['타수대비득점'].mean(axis=0) * new_hitter_factor,
        '타수대비타점' : table['타수대비타점'].mean(axis=0) * new_hitter_factor,
        '출루율': table['출루율'].mean(axis=0) * new_hitter_factor,
        '도루성공률' : table['도루성공률'].mean(axis=0) * new_hitter_factor,
        '선수OPS' : table['선수OPS'].mean(axis=0) * new_hitter_factor,
        '선수WAR' : 0
    }

    #print(new_data)
    table = table.append(new_data, ignore_index=True)

    print(table.tail())

    #print(table)
    #print(table.columns)

    # csv 형식으로 저장
    table.to_csv('hitter_processing' + str(i) + '.csv', encoding='utf-8-sig')
