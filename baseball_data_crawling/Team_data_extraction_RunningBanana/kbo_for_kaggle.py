import pandas as pd

'''
age 나이
G 경기 수
PA 타수
AB 타석 수
R 득점
H 안타
2B 2루타
3B 3루타
HR 홈런
TB 총 루타 수
RBI 타점
SB 도루 성공
CS 도루 실패
BB 볼넷 수
HBP 몸에 맞은 공
GB 고의4구
SO 삼진
GDP 병살
BU 희생타
fly 희생 플라이
year 해당 시즌
salary 해당 시즌의 연봉
war 대체 선수 대비 승리 기여도
year_born 선수 태어난 연도
hand2 타석 위치
cp 최근 포지션
tp 통합 포지션
1B 1루타
FBP BB + HBP
avg 타율
OBP 출루율
SLG 장타율
OPS OBP + SLG
p_year 다음 시즌
YAB 다음 시즌 타석 수
YOPS 다음 시즌 OPS
'''
data = pd.read_csv("2019_kbo_for_kaggle_v2.csv")
print(data)
print(data.columns)
print(data['batter_name'].unique()) # 각 선수 이름
print(data['batter_name'].nunique()) # 선수 총 338명