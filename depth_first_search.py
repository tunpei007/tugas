peta =  {'A':set(['B', 'E']),
         'B':set(['A','C','D']),
         'C':set(['B','E']),
         'D':set(['B']),
         'E':set(['C','A','F','G']),
         'F':set(['E','G']),
         'G':set(['F','E'])}

pilih = int (input("pilih : "))

if (pilih == 1):
 def dfs(graf, mulai, tujuan):
     stack = [[mulai]]
     visited = set()
     while stack:
        
        panjang_tumpukan = len(stack)-1
        
        
        jalur = stack.pop(panjang_tumpukan)

        
        state = jalur[-1]

        
        if state == tujuan:
            return jalur
        
        elif state not in visited:
            
            for cabang in graf.get(state, []): 
                jalur_baru = list(jalur) 
                jalur_baru.append(cabang) 
                stack.append(jalur_baru) 

            
            visited.add(state)


        
        isi = len(stack)
        if isi == 0:
            print("Tidak ditemukan")
elif (pilih == 2) :    

    def bfs(graf, mulai, tujuan):
        queue = [[mulai]]
        visited = set()

        while queue:     
            jalur = queue.pop(0)

        
            state = jalur[-1]

        
            if state == tujuan:
                return jalur
        
            elif state not in visited:
            
                for cabang in graf.get(state, []): 
                    jalur_baru = list(jalur) 
                    jalur_baru.append(cabang)
                    queue.append(jalur_baru) 

            
            visited.add(state)

        
        isi = len(queue)
        if isi == 0:
            print("Tidak ditemukan")

else :
    print ("Inputan salah")
